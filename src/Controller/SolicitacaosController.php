<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Solicitacaos Controller
 *
 * @property \App\Model\Table\SolicitacaosTable $Solicitacaos
 */
class SolicitacaosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Solicitacaos->find()
            ->contain(['Categorias', 'Colaboradors']);
        $solicitacaos = $this->paginate($query);

        $this->set(compact('solicitacaos'));
    }

    /**
     * View method
     *
     * @param string|null $id Solicitacao id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $solicitacao = $this->Solicitacaos->get($id, contain: ['Categorias', 'Colaboradors']);
        $this->set(compact('solicitacao'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $solicitacao = $this->Solicitacaos->newEmptyEntity();
        if ($this->request->is('post')) {
            $solicitacao = $this->Solicitacaos->patchEntity($solicitacao, $this->request->getData());
            if ($this->Solicitacaos->save($solicitacao)) {
                $this->Flash->success(__('The solicitacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitacao could not be saved. Please, try again.'));
        }
        $categorias = $this->Solicitacaos->Categorias->find('list', limit: 200)->all();
        $colaboradors = $this->Solicitacaos->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('solicitacao', 'categorias', 'colaboradors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Solicitacao id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $solicitacao = $this->Solicitacaos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $solicitacao = $this->Solicitacaos->patchEntity($solicitacao, $this->request->getData());
            if ($this->Solicitacaos->save($solicitacao)) {
                $this->Flash->success(__('The solicitacao has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The solicitacao could not be saved. Please, try again.'));
        }
        $categorias = $this->Solicitacaos->Categorias->find('list', limit: 200)->all();
        $colaboradors = $this->Solicitacaos->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('solicitacao', 'categorias', 'colaboradors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Solicitacao id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $solicitacao = $this->Solicitacaos->get($id);
        if ($this->Solicitacaos->delete($solicitacao)) {
            $this->Flash->success(__('The solicitacao has been deleted.'));
        } else {
            $this->Flash->error(__('The solicitacao could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
