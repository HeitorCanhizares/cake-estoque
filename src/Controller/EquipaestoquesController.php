<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Equipaestoques Controller
 *
 * @property \App\Model\Table\EquipaestoquesTable $Equipaestoques
 */
class EquipaestoquesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Equipaestoques->find()
            ->contain(['Equipamentos']);
        $equipaestoques = $this->paginate($query);

        $this->set(compact('equipaestoques'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipaestoque id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipaestoque = $this->Equipaestoques->get($id, contain: ['Equipamentos', 'Entradas', 'Fichas', 'Inventarios']);
        $this->set(compact('equipaestoque'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipaestoque = $this->Equipaestoques->newEmptyEntity();
        if ($this->request->is('post')) {
            $equipaestoque = $this->Equipaestoques->patchEntity($equipaestoque, $this->request->getData());
            if ($this->Equipaestoques->save($equipaestoque)) {
                $this->Flash->success(__('The equipaestoque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipaestoque could not be saved. Please, try again.'));
        }
        $equipamentos = $this->Equipaestoques->Equipamentos->find('list', limit: 200)->all();
        $this->set(compact('equipaestoque', 'equipamentos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipaestoque id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipaestoque = $this->Equipaestoques->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipaestoque = $this->Equipaestoques->patchEntity($equipaestoque, $this->request->getData());
            if ($this->Equipaestoques->save($equipaestoque)) {
                $this->Flash->success(__('The equipaestoque has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipaestoque could not be saved. Please, try again.'));
        }
        $equipamentos = $this->Equipaestoques->Equipamentos->find('list', limit: 200)->all();
        $this->set(compact('equipaestoque', 'equipamentos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipaestoque id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipaestoque = $this->Equipaestoques->get($id);
        if ($this->Equipaestoques->delete($equipaestoque)) {
            $this->Flash->success(__('The equipaestoque has been deleted.'));
        } else {
            $this->Flash->error(__('The equipaestoque could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
