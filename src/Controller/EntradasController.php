<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Entradas Controller
 *
 * @property \App\Model\Table\EntradasTable $Entradas
 */
class EntradasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Entradas->find()
            ->contain(['Equipaestoques', 'Colaboradors']);
        $entradas = $this->paginate($query);

        $this->set(compact('entradas'));
    }

    /**
     * View method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $entrada = $this->Entradas->get($id, contain: ['Equipaestoques', 'Colaboradors']);
        $this->set(compact('entrada'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $entrada = $this->Entradas->newEmptyEntity();
        if ($this->request->is('post')) {
            $entrada = $this->Entradas->patchEntity($entrada, $this->request->getData());
            if ($this->Entradas->save($entrada)) {
                $this->Flash->success(__('The entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
        }
        $equipaestoques = $this->Entradas->Equipaestoques->find('list', limit: 200)->all();
        $colaboradors = $this->Entradas->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('entrada', 'equipaestoques', 'colaboradors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $entrada = $this->Entradas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $entrada = $this->Entradas->patchEntity($entrada, $this->request->getData());
            if ($this->Entradas->save($entrada)) {
                $this->Flash->success(__('The entrada has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The entrada could not be saved. Please, try again.'));
        }
        $equipaestoques = $this->Entradas->Equipaestoques->find('list', limit: 200)->all();
        $colaboradors = $this->Entradas->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('entrada', 'equipaestoques', 'colaboradors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Entrada id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $entrada = $this->Entradas->get($id);
        if ($this->Entradas->delete($entrada)) {
            $this->Flash->success(__('The entrada has been deleted.'));
        } else {
            $this->Flash->error(__('The entrada could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
