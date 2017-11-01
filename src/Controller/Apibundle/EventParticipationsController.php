<?php
namespace App\Controller\Apibundle;


/**
 * EventParticipations Controller
 *
 * @property \App\Model\Table\EventParticipationsTable $EventParticipations
 *
 * @method \App\Model\Entity\EventParticipation[] paginate($object = null, array $settings = [])
 */
class EventParticipationsController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['EventParticipationTypes', 'Events', 'Users']
        ];
        $eventParticipations = $this->paginate($this->EventParticipations);

        $this->set(compact('eventParticipations'));
        $this->set('_serialize', ['eventParticipations']);
    }

    /**
     * View method
     *
     * @param string|null $id Event Participation id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventParticipation = $this->EventParticipations->get($id, [
            'contain' => ['EventParticipationTypes', 'Events', 'Users']
        ]);

        $this->set('eventParticipation', $eventParticipation);
        $this->set('_serialize', ['eventParticipation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventParticipation = $this->EventParticipations->newEntity();
        if ($this->request->is('post')) {
            $eventParticipation = $this->EventParticipations->patchEntity($eventParticipation, $this->request->getData());
            if ($this->EventParticipations->save($eventParticipation)) {
                $this->Flash->success(__('The event participation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event participation could not be saved. Please, try again.'));
        }
        $eventParticipationTypes = $this->EventParticipations->EventParticipationTypes->find('list', ['limit' => 200]);
        $events = $this->EventParticipations->Events->find('list', ['limit' => 200]);
        $users = $this->EventParticipations->Users->find('list', ['limit' => 200]);
        $this->set(compact('eventParticipation', 'eventParticipationTypes', 'events', 'users'));
        $this->set('_serialize', ['eventParticipation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Participation id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventParticipation = $this->EventParticipations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventParticipation = $this->EventParticipations->patchEntity($eventParticipation, $this->request->getData());
            if ($this->EventParticipations->save($eventParticipation)) {
                $this->Flash->success(__('The event participation has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event participation could not be saved. Please, try again.'));
        }
        $eventParticipationTypes = $this->EventParticipations->EventParticipationTypes->find('list', ['limit' => 200]);
        $events = $this->EventParticipations->Events->find('list', ['limit' => 200]);
        $users = $this->EventParticipations->Users->find('list', ['limit' => 200]);
        $this->set(compact('eventParticipation', 'eventParticipationTypes', 'events', 'users'));
        $this->set('_serialize', ['eventParticipation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Participation id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventParticipation = $this->EventParticipations->get($id);
        if ($this->EventParticipations->delete($eventParticipation)) {
            $this->Flash->success(__('The event participation has been deleted.'));
        } else {
            $this->Flash->error(__('The event participation could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
