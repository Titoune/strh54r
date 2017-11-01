<?php
namespace App\Controller\Apibundle;


/**
 * PollAnswers Controller
 *
 * @property \App\Model\Table\PollAnswersTable $PollAnswers
 *
 * @method \App\Model\Entity\PollAnswer[] paginate($object = null, array $settings = [])
 */
class PollAnswersController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Polls', 'PollProposals', 'Users']
        ];
        $pollAnswers = $this->paginate($this->PollAnswers);

        $this->set(compact('pollAnswers'));
        $this->set('_serialize', ['pollAnswers']);
    }

    /**
     * View method
     *
     * @param string|null $id Poll Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pollAnswer = $this->PollAnswers->get($id, [
            'contain' => ['Polls', 'PollProposals', 'Users']
        ]);

        $this->set('pollAnswer', $pollAnswer);
        $this->set('_serialize', ['pollAnswer']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pollAnswer = $this->PollAnswers->newEntity();
        if ($this->request->is('post')) {
            $pollAnswer = $this->PollAnswers->patchEntity($pollAnswer, $this->request->getData());
            if ($this->PollAnswers->save($pollAnswer)) {
                $this->Flash->success(__('The poll answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poll answer could not be saved. Please, try again.'));
        }
        $polls = $this->PollAnswers->Polls->find('list', ['limit' => 200]);
        $pollProposals = $this->PollAnswers->PollProposals->find('list', ['limit' => 200]);
        $users = $this->PollAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('pollAnswer', 'polls', 'pollProposals', 'users'));
        $this->set('_serialize', ['pollAnswer']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Poll Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pollAnswer = $this->PollAnswers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pollAnswer = $this->PollAnswers->patchEntity($pollAnswer, $this->request->getData());
            if ($this->PollAnswers->save($pollAnswer)) {
                $this->Flash->success(__('The poll answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poll answer could not be saved. Please, try again.'));
        }
        $polls = $this->PollAnswers->Polls->find('list', ['limit' => 200]);
        $pollProposals = $this->PollAnswers->PollProposals->find('list', ['limit' => 200]);
        $users = $this->PollAnswers->Users->find('list', ['limit' => 200]);
        $this->set(compact('pollAnswer', 'polls', 'pollProposals', 'users'));
        $this->set('_serialize', ['pollAnswer']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Poll Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pollAnswer = $this->PollAnswers->get($id);
        if ($this->PollAnswers->delete($pollAnswer)) {
            $this->Flash->success(__('The poll answer has been deleted.'));
        } else {
            $this->Flash->error(__('The poll answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
