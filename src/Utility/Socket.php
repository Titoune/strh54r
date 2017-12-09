<?php

namespace App\Utility;

use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version2X;
use ElephantIO\Engine\SocketIO\Version1X;

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
            $client = new Client(new Version2X(SOCKET_URL . '?token=' . $this->jwt, [
                'context' => ['ssl' => ['verify_peer_name' => false, 'verify_peer' => false]],
                'query' => [
                    'token' => $this->jwt
                ],
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