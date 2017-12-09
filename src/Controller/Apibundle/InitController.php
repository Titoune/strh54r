<?php

namespace App\Controller\Apibundle;

use App\Utility\Socket;
use App\Utility\Tools;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Event\Event;
use Cake\I18n\Time;
use Firebase\JWT\JWT;
use App\Controller\AppController;

class InitController extends AppController
{
    public $api_response_code = 200;
    public $api_response_status = 'success';
    public $api_response_charset = 'utf-8';
    public $api_response_type = 'application/json';
    public $api_response_flash = null;
    public $api_response_new_jwt = null;
    public $api_response_data = [];

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    private function buildApiResponse()
    {
        if ($this->api_response_code != 200) {
            $this->api_response_status = 'error';
        }

        $return = [];
        $return['code'] = $this->api_response_code;
        $return['status'] = $this->api_response_status;
        $return['flash'] = $this->api_response_flash;
        if (!empty($this->api_response_new_jwt)) {
            $return['new_jwt'] = $this->api_response_new_jwt;
        }
        if (!empty($this->api_response_data)) {
            $return['data'] = $this->api_response_data;
        }

        $response = $this->response
            ->withCharset($this->api_response_charset)
            ->withType($this->api_response_type)
            ->withStatus($this->api_response_code)
            ->withDisabledCache()
            ->withStringBody(json_encode($return));

        $this->response = $response;
        return $this->response;
    }


    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        return $this->buildApiResponse();
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        if (isset($_SERVER['HTTP_ORIGIN'])) {
            header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
            header('Access-Control-Allow-Credentials: true');
            header('Access-Control-Max-Age: 1000');    // cache for 1 day
        }

        // Access-Control headers are received during OPTIONS requests
        if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {
            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                header("Access-Control-Allow-Methods: GET, POST, PUT, PATCH, DELETE, HEAD, OPTIONS");

            if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        }

        if ($this->request->is('options')) {
            return $this->response;
        }

        $this->_performTokenValidation($event);
    }


    protected function _performTokenValidation(Event $event)
    {
        $request = $event->getSubject()->request;
        if (!empty($request->params['allowWithoutToken']) && $request->params['allowWithoutToken']) {
            return true;
        }

        $header = $request->getHeader('Authorization');
        if (!empty($header)) {
            $parts = explode(' ', $header[0]);
            if (count($parts) < 2 || empty($parts[0]) || !preg_match('/^Bearer$/i', $parts[0])) {
                $this->api_response_code = 401;
                $this->api_response_flash = "Format du token invalide";
                return $this->buildApiResponse();
            }

            $token = $parts[1];
        } elseif (!empty($this->request->getQuery('token'))) {
            $token = $this->request->getQuery('token');
        } elseif (!empty($request->data['token'])) {
            $token = $request->data['token'];
        } else {
            $this->api_response_code = 401;
            $this->api_response_flash = "Token introuvable";
            return $this->buildApiResponse();
        }

        try {
            $payload = JWT::decode($token, TOKEN_CYPHER_KEY, [TOKEN_ALGORYTHM]);
        } catch (\Exception $e) {

//            if expired => try renew
            if ($e->getCode() == 0) {
                $this->renewToken($token);
            } else {
                $this->api_response_code = 401;
                $this->api_response_flash = "Token invalide";
            }

            return $this->buildApiResponse();
        }

        if (empty($payload)) {
            $this->api_response_code = 401;
            $this->api_response_flash = "Token invalide";
            return $this->buildApiResponse();
        }
        return true;
    }

    private function renewToken($token)
    {
        JWT::$leeway = 720000;
        $payload = Tools::decodeJwt($token);
        $response = $this->checkLogin($payload->user->cellphone_code, $payload->user->cellphone);
        $this->api_response_new_jwt = $response['new_jwt'];
        $this->api_response_code = $response['httpStatusCode'];
    }

    protected function checkLogin($cellphone_code, $cellphone, $password = null)
    {
        $return = [
            'httpStatusCode' => 400,
            'flash' => null,
            'payload' => null,
            'new_jwt' => null,
            'user' => null,
        ];

        $this->loadModel('Users');
        $user = $this->Users->find()
            ->where(['Users.cellphone_code' => $cellphone_code, 'Users.cellphone' => $cellphone])
            ->first();

        if ($user) :
//            if ($password) {
//                $verify = (new DefaultPasswordHasher())->check($password, $user->password);
//            } else {
//                $verify = true;
//            }
            $verify = true;
            if ($verify) :
                $payload = Tools::setPayload($user);
                $return['httpStatusCode'] = 200;
                $return['new_jwt'] = Tools::encodeJwt($payload);
                $return['payload'] = $payload;
                $return['user'] = $user;
            else :
                $return['httpStatusCode'] = 400;
                $return['flash'] = 'Mot de passe incorrect';
            endif;
        else:
            $return['httpStatusCode'] = 400;
            $return['flash'] = 'Téléphone incorrect';
        endif;

        return $return;
    }

}
