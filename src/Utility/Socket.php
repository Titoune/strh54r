<?php

namespace App\Utility;

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;

class Socket
{
    private $jwt;

    public function __construct($jwt)
    {
        $this->jwt = $jwt;
    }


    public function emit($event, $data)
    {
        try {
            $client = new Client(new Version2X(SOCKET_URL, [
                'headers' => [
                    'Authorization: ' . $this->jwt
                ]
            ]));

            $client->initialize();
            $client->emit($event, $data);
            $client->close();
        } catch (\Exception $e) {
            unset($e);
        }
    }

}