<?php
namespace App\Controller\Apibundle;


/**
 * ChatMessages Controller
 *
 * @property \App\Model\Table\ChatMessagesTable $ChatMessages
 *
 * @method \App\Model\Entity\ChatMessage[] paginate($object = null, array $settings = [])
 */
class ChatMessagesController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $chatMessages = $this->paginate($this->ChatMessages);

        $this->set(compact('chatMessages'));
        $this->set('_serialize', ['chatMessages']);
    }

    /**
     * View method
     *
     * @param string|null $id Chat Message id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chatMessage = $this->ChatMessages->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('chatMessage', $chatMessage);
        $this->set('_serialize', ['chatMessage']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chatMessage = $this->ChatMessages->newEntity();
        if ($this->request->is('post')) {
            $chatMessage = $this->ChatMessages->patchEntity($chatMessage, $this->request->getData());
            if ($this->ChatMessages->save($chatMessage)) {
                $this->Flash->success(__('The chat message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chat message could not be saved. Please, try again.'));
        }
        $users = $this->ChatMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('chatMessage', 'users'));
        $this->set('_serialize', ['chatMessage']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chat Message id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chatMessage = $this->ChatMessages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chatMessage = $this->ChatMessages->patchEntity($chatMessage, $this->request->getData());
            if ($this->ChatMessages->save($chatMessage)) {
                $this->Flash->success(__('The chat message has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The chat message could not be saved. Please, try again.'));
        }
        $users = $this->ChatMessages->Users->find('list', ['limit' => 200]);
        $this->set(compact('chatMessage', 'users'));
        $this->set('_serialize', ['chatMessage']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chat Message id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chatMessage = $this->ChatMessages->get($id);
        if ($this->ChatMessages->delete($chatMessage)) {
            $this->Flash->success(__('The chat message has been deleted.'));
        } else {
            $this->Flash->error(__('The chat message could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
