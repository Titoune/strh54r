<?php
namespace App\Controller\Apibundle;

/**
 * DiscussionMessages Controller
 *
 * @property \App\Model\Table\DiscussionMessagesTable $DiscussionMessages
 *
 * @method \App\Model\Entity\DiscussionMessage[] paginate($object = null, array $settings = [])
 */
class DiscussionMessagesController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Discussions', 'Users']
        ];
        $discussionMessages = $this->paginate($this->DiscussionMessages);

        $this->set(compact('discussionMessages'));
        $this->set('_serialize', ['discussionMessages']);
    }

    /**
     * View method
     *
     * @param string|null $id Discussion Message id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $discussionMessage = $this->DiscussionMessages->get($id, [
            'contain' => ['Discussions', 'Users']
        ]);

        $this->set('discussionMessage', $discussionMessage);
        $this->set('_serialize', ['discussionMessage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $discussionMessage = $this->DiscussionMessages->newEntity();
        if ($this->request->is('post')) {
            $discussionMessage = $this->DiscussionMessages->patchEntity($discussionMessage, $this->request->getData());
            if ($this->DiscussionMessages->save($discussionMessage)) {
                $this->Flash->success(__('The discussion message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discussion message could not be saved. Please, try again.'));
        }
        $discussions = $this->DiscussionMessages->Discussions->find('list', ['limit' => 200]);
        $users = $this->DiscussionMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('discussionMessage', 'discussions', 'users'));
        $this->set('_serialize', ['discussionMessage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Discussion Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $discussionMessage = $this->DiscussionMessages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $discussionMessage = $this->DiscussionMessages->patchEntity($discussionMessage, $this->request->getData());
            if ($this->DiscussionMessages->save($discussionMessage)) {
                $this->Flash->success(__('The discussion message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The discussion message could not be saved. Please, try again.'));
        }
        $discussions = $this->DiscussionMessages->Discussions->find('list', ['limit' => 200]);
        $users = $this->DiscussionMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('discussionMessage', 'discussions', 'users'));
        $this->set('_serialize', ['discussionMessage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Discussion Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $discussionMessage = $this->DiscussionMessages->get($id);
        if ($this->DiscussionMessages->delete($discussionMessage)) {
            $this->Flash->success(__('The discussion message has been deleted.'));
        } else {
            $this->Flash->error(__('The discussion message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
