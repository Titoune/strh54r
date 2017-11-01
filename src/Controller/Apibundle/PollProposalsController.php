<?php
namespace App\Controller\Apibundle;


/**
 * PollProposals Controller
 *
 * @property \App\Model\Table\PollProposalsTable $PollProposals
 *
 * @method \App\Model\Entity\PollProposal[] paginate($object = null, array $settings = [])
 */
class PollProposalsController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Polls']
        ];
        $pollProposals = $this->paginate($this->PollProposals);

        $this->set(compact('pollProposals'));
        $this->set('_serialize', ['pollProposals']);
    }

    /**
     * View method
     *
     * @param string|null $id Poll Proposal id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pollProposal = $this->PollProposals->get($id, [
            'contain' => ['Polls', 'PollAnswers']
        ]);

        $this->set('pollProposal', $pollProposal);
        $this->set('_serialize', ['pollProposal']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pollProposal = $this->PollProposals->newEntity();
        if ($this->request->is('post')) {
            $pollProposal = $this->PollProposals->patchEntity($pollProposal, $this->request->getData());
            if ($this->PollProposals->save($pollProposal)) {
                $this->Flash->success(__('The poll proposal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poll proposal could not be saved. Please, try again.'));
        }
        $polls = $this->PollProposals->Polls->find('list', ['limit' => 200]);
        $this->set(compact('pollProposal', 'polls'));
        $this->set('_serialize', ['pollProposal']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Poll Proposal id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pollProposal = $this->PollProposals->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pollProposal = $this->PollProposals->patchEntity($pollProposal, $this->request->getData());
            if ($this->PollProposals->save($pollProposal)) {
                $this->Flash->success(__('The poll proposal has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poll proposal could not be saved. Please, try again.'));
        }
        $polls = $this->PollProposals->Polls->find('list', ['limit' => 200]);
        $this->set(compact('pollProposal', 'polls'));
        $this->set('_serialize', ['pollProposal']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Poll Proposal id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pollProposal = $this->PollProposals->get($id);
        if ($this->PollProposals->delete($pollProposal)) {
            $this->Flash->success(__('The poll proposal has been deleted.'));
        } else {
            $this->Flash->error(__('The poll proposal could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
