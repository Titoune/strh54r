<?php
namespace App\Controller\Apibundle;


/**
 * RelationTypes Controller
 *
 * @property \App\Model\Table\RelationTypesTable $RelationTypes
 *
 * @method \App\Model\Entity\RelationType[] paginate($object = null, array $settings = [])
 */
class RelationTypesController extends InitController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $relationTypes = $this->paginate($this->RelationTypes);

        $this->set(compact('relationTypes'));
        $this->set('_serialize', ['relationTypes']);
    }

    /**
     * View method
     *
     * @param string|null $id Relation Type id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $relationType = $this->RelationTypes->get($id, [
            'contain' => ['Relations']
        ]);

        $this->set('relationType', $relationType);
        $this->set('_serialize', ['relationType']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $relationType = $this->RelationTypes->newEntity();
        if ($this->request->is('post')) {
            $relationType = $this->RelationTypes->patchEntity($relationType, $this->request->getData());
            if ($this->RelationTypes->save($relationType)) {
                $this->Flash->success(__('The relation type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relation type could not be saved. Please, try again.'));
        }
        $this->set(compact('relationType'));
        $this->set('_serialize', ['relationType']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Relation Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $relationType = $this->RelationTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $relationType = $this->RelationTypes->patchEntity($relationType, $this->request->getData());
            if ($this->RelationTypes->save($relationType)) {
                $this->Flash->success(__('The relation type has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The relation type could not be saved. Please, try again.'));
        }
        $this->set(compact('relationType'));
        $this->set('_serialize', ['relationType']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Relation Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $relationType = $this->RelationTypes->get($id);
        if ($this->RelationTypes->delete($relationType)) {
            $this->Flash->success(__('The relation type has been deleted.'));
        } else {
            $this->Flash->error(__('The relation type could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
