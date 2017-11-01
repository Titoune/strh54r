<?php
namespace App\Controller\Apibundle;

/**
 * EventComments Controller
 *
 * @property \App\Model\Table\EventCommentsTable $EventComments
 *
 * @method \App\Model\Entity\EventComment[] paginate($object = null, array $settings = [])
 */
class EventCommentsController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Events']
        ];
        $eventComments = $this->paginate($this->EventComments);

        $this->set(compact('eventComments'));
        $this->set('_serialize', ['eventComments']);
    }

    /**
     * View method
     *
     * @param string|null $id Event Comment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventComment = $this->EventComments->get($id, [
            'contain' => ['Users', 'Events']
        ]);

        $this->set('eventComment', $eventComment);
        $this->set('_serialize', ['eventComment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventComment = $this->EventComments->newEntity();
        if ($this->request->is('post')) {
            $eventComment = $this->EventComments->patchEntity($eventComment, $this->request->getData());
            if ($this->EventComments->save($eventComment)) {
                $this->Flash->success(__('The event comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event comment could not be saved. Please, try again.'));
        }
        $users = $this->EventComments->Users->find('list', ['limit' => 200]);
        $events = $this->EventComments->Events->find('list', ['limit' => 200]);
        $this->set(compact('eventComment', 'users', 'events'));
        $this->set('_serialize', ['eventComment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Event Comment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventComment = $this->EventComments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventComment = $this->EventComments->patchEntity($eventComment, $this->request->getData());
            if ($this->EventComments->save($eventComment)) {
                $this->Flash->success(__('The event comment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The event comment could not be saved. Please, try again.'));
        }
        $users = $this->EventComments->Users->find('list', ['limit' => 200]);
        $events = $this->EventComments->Events->find('list', ['limit' => 200]);
        $this->set(compact('eventComment', 'users', 'events'));
        $this->set('_serialize', ['eventComment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Event Comment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventComment = $this->EventComments->get($id);
        if ($this->EventComments->delete($eventComment)) {
            $this->Flash->success(__('The event comment has been deleted.'));
        } else {
            $this->Flash->error(__('The event comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
