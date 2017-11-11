<?php

namespace App\Controller\Apibundle;

use App\Utility\Socket;
use App\Utility\Tools;


/**
 * ChatMessages Controller
 *
 * @property \App\Model\Table\ChatMessagesTable $ChatMessages
 *
 * @method \App\Model\Entity\ChatMessage[] paginate($object = null, array $settings = [])
 */
class ChatMessagesController extends InitController
{

    public function getChatMessages()
    {
        $chat_messages = $this->ChatMessages->find()
            ->contain(['Users'])
            ->order('ChatMessages.created ASC');
        $this->apiResponse['data']['chat_messages'] = $chat_messages;

    }

    public function sendChatMessage()
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
        if ($this->request->is('post')) {
            $chat_message = $this->ChatMessages->newEntity(['user_id' => $payloads->user->id]);
            $chat_message = $this->ChatMessages->patchEntity($chat_message, $this->request->getData(), ['validate' => 'default', 'fieldList' => ['content']]);
            if ($result = $this->ChatMessages->save($chat_message)) {
                $data['sender'] = $payloads->user;
                (new Socket($this->request->getHeaderLine('Authorization')))->emit('chat-message-create', ['chat-message' => $data]);

            } else {
                $this->httpStatusCode = 403;
                $this->apiResponse['flash'] = "Veuillez vérifier le formulaire";
            }

        } else {
            $this->httpStatusCode = 405;
        }
    }
}
