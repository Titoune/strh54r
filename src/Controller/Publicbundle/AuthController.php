<?php

namespace App\Controller\Publicbundle;

use Cake\Event\Event;


class AuthController extends InitController
{
    public function initialize()
    {
        parent::initialize();
    }

    public function beforeFilter(Event $event)
    {
        return parent::beforeFilter($event);
    }

    public function redirectPasswordRegenerate($email, $token)
    {
        if ($this->request->is('mobile')) {
            header('Location: ' . 'mairesetcitoyens://app/nouveau-mot-de-passe/' . $email . '/' . $token);
        } else {
            header('Location: ' . WEBSITE_URL . 'users/generate-password/' . $email . '/' . $token);
        }
        die;
    }

    public function redirectUserRegistration($email, $token)
    {
        if ($this->request->is('mobile')) {
            header('Location: ' . 'mairesetcitoyens://app/validation-inscription/' . $email . '/' . $token);
        } else {
            header('Location: ' . WEBSITE_URL . 'users/registration-validation/' . $email . '/' . $token);
        }
        die;
    }

}

