<?php

namespace App\Utility;


use Cake\Utility\Text;
use Firebase\JWT\JWT;
use Cake\Core\Configure;

class Tools
{
    public static function _getRandomHash()
    {
        $str = time() . '-';
        $characters = array_merge(range('a', 'z'), range('2', '9'));
        $max = (count($characters) - 1);
        for ($i = 0; $i < 128; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }

        return hash('sha512', $str);
    }

    public static function _getRandomFilename($length)
    {
        $str = time() . '-';
        $characters = array_merge(range('a', 'z'), range('2', '9'));
        $max = (count($characters) - 1);
        for ($i = 0; $i < $length; $i++) {
            $rand = mt_rand(0, $max);
            $str .= $characters[$rand];
        }

        return $str;
    }

    public static function getLoremIpsum($length)
    {
        $return = str_replace("Lorem ipsum dolor sit amet, consectetur adipiscing elit.", "", file_get_contents('http://loripsum.net/api/1/medium/plaintext'));
        return Text::truncate($return, $length, ['exact' => false, 'html' => false, 'ellipsis' => '']);
    }

    public static function _rmdir($dir)
    {
        if (is_dir($dir)) {
            $objects = scandir($dir);
            foreach ($objects as $object) {
                if ($object != "." && $object != "..") {
                    if (filetype($dir . "/" . $object) == "dir")
                        rmdir($dir . "/" . $object);
                    else unlink($dir . "/" . $object);
                }
            }
            reset($objects);
            rmdir($dir);
        }
    }

    public static function getErrors($errors)
    {
        $array = [];
        foreach ($errors AS $k => $error) {
            foreach ($error AS $e) {
                $array[$k] = $e;
            }
        }
        return $array;
    }
    

    public static function base64ToJpeg($base64)
    {
        $base64 = str_replace('data:image/png;base64,', '', $base64);
        $base64 = str_replace('data:image/jpeg;base64,', '', $base64);
        $base64 = str_replace(' ', '+', $base64);
        $data = base64_decode($base64);
        return imagecreatefromstring($data);
    }



    public static function decodeJwt($authorization)
    {
        return JWT::decode(str_replace('Bearer ', '', $authorization), TOKEN_CYPHER_KEY, [TOKEN_ALGORYTHM]);
    }

    public static function encodeJwt($payload = null)
    {
        if (empty($payload)) {
            return false;
        }

        $token = 'Bearer '.JWT::encode($payload, TOKEN_CYPHER_KEY, TOKEN_ALGORYTHM);
        return $token;
    }


    public static function setPayload($user)
    {
        return [
            'iat' => time(),
            'exp' => (time() + 3600), //3600
            'user' => [
                'id' => $user->id,
                'email' => $user->email,
                'fullname' => $user->fullname,
                'firstname' => $user->firstname,
                'lastname' => $user->lastname,
                'cellphone_code' => $user->cellphone_code,
                'cellphone' => $user->cellphone,
                'picture_url' => $user->picture_url

            ]
        ];
    }
}
