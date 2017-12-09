<?php

namespace App\Controller\Apibundle;

use App\Utility\Socket;
use App\Utility\Tools;

/**
 * DiscussionMessages Controller
 *
 * @property \App\Model\Table\DiscussionMessagesTable $DiscussionMessages
 *
 * @method \App\Model\Entity\DiscussionMessage[] paginate($object = null, array $settings = [])
 */
class DiscussionMessagesController extends InitController
{

    public function sendDiscussionMessage()
    {
        if ($this->request->is('post')) {

            $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
            $discussion = $this->DiscussionMessages->Discussions->find()
                ->where(['user_id' => $payloads->user->id])
                ->orWhere(['user_id1' => $payloads->user->id])
                ->andWhere(['Discussions.id' => $this->request->getData('discussion_id')])->first();


            if ($discussion) {
                $discussion_message = $this->DiscussionMessages->newEntity([
                    'discussion_id' => $discussion->id,
                    'sender_id' => $payloads->user->id,
                    'receiver_id' => (($discussion->user_id != $payloads->user->id) ? $discussion->user_id : $discussion->user_id1)
                ]);

                $discussion_message = $this->DiscussionMessages->patchEntity($discussion_message, $this->request->getData(), ['validate' => 'default', 'fieldList' => ['content']]);
                if ($result = $this->DiscussionMessages->save($discussion_message)) {
                    (new Socket($this->request->getHeaderLine('Authorization')))->emit('discussion-message-create', ['discussion_message' => $result]);
                } else {
                    $this->api_response_code = 403;
                    $this->api_response_flash = "Veuillez vérifier le formulaire.";
                }
            } else {
                $this->api_response_code = 404;
                $this->api_response_flash = "Discussion introuvable.";
            }
        } else {
            $this->api_response_code = 405;

        }
    }
}
