<?php
namespace App\Controller\Apibundle;
use App\Utility\Tools;


/**
 * Polls Controller
 *
 * @property \App\Model\Table\PollsTable $Polls
 *
 * @method \App\Model\Entity\Poll[] paginate($object = null, array $settings = [])
 */
class PollsController extends InitController
{

    public function getPolls()
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
        $polls = $this->Polls->find()->order(['Polls.created' => 'asc']);
        $this->api_response_data['polls'] = $polls;

    }
}
