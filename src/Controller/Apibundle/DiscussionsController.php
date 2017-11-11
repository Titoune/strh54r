<?php
namespace App\Controller\Apibundle;
use App\Utility\Tools;

/**
 * Discussions Controller
 *
 * @property \App\Model\Table\DiscussionsTable $Discussions
 *
 * @method \App\Model\Entity\Discussion[] paginate($object = null, array $settings = [])
 */
class DiscussionsController extends InitController
{
    public function getDiscussionMessages()
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));

            $discussion_messages = $this->Discussions->DiscussionMessages->find()->contain(['Senders'])
                ->where(['DiscussionMessages.sender_id' => $payloads->user->id])
                ->orWhere(['DiscussionMessages.receiver_id' => $payloads->user->id])
                ->order(['DiscussionMessages.created' => 'asc'])
                ->indexBy('discussion_id')->sortBy('created', SORT_DESC);


        $discussion_messages = array_values($discussion_messages->toArray());
        $this->apiResponse['data']['discussion_messages'] = $discussion_messages;

    }
}
