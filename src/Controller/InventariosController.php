<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Inventarios Controller
 *
 * @property \App\Model\Table\InventariosTable $Inventarios
 */
class InventariosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Inventarios->find()
            ->contain(['Equipaestoques', 'Colaboradors']);
        $inventarios = $this->paginate($query);

        $this->set(compact('inventarios'));
    }

    /**
     * View method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $inventario = $this->Inventarios->get($id, contain: ['Equipaestoques', 'Colaboradors']);
        $this->set(compact('inventario'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $inventario = $this->Inventarios->newEmptyEntity();
        if ($this->request->is('post')) {
            $inventario = $this->Inventarios->patchEntity($inventario, $this->request->getData());
            if ($this->Inventarios->save($inventario)) {
                $this->Flash->success(__('The inventario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventario could not be saved. Please, try again.'));
        }
        $equipaestoques = $this->Inventarios->Equipaestoques->find('list', limit: 200)->all();
        $colaboradors = $this->Inventarios->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('inventario', 'equipaestoques', 'colaboradors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $inventario = $this->Inventarios->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $inventario = $this->Inventarios->patchEntity($inventario, $this->request->getData());
            if ($this->Inventarios->save($inventario)) {
                $this->Flash->success(__('The inventario has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The inventario could not be saved. Please, try again.'));
        }
        $equipaestoques = $this->Inventarios->Equipaestoques->find('list', limit: 200)->all();
        $colaboradors = $this->Inventarios->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('inventario', 'equipaestoques', 'colaboradors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Inventario id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $inventario = $this->Inventarios->get($id);
        if ($this->Inventarios->delete($inventario)) {
            $this->Flash->success(__('The inventario has been deleted.'));
        } else {
            $this->Flash->error(__('The inventario could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
