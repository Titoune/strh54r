<?php

namespace App\Controller\Apibundle;
use App\Utility\Tools;


/**
 * Events Controller
 *
 * @property \App\Model\Table\EventsTable $Events
 *
 * @method \App\Model\Entity\Event[] paginate($object = null, array $settings = [])
 */
class EventsController extends InitController
{

    public function getEvents()
    {
        $payloads = Tools::decodeJwt($this->request->getHeaderLine('Authorization'));
        $events = $this->Events->find()->order(['Events.created' => 'asc']);
        $this->api_response_data['events'] = $events;

    }
}
