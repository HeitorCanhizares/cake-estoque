<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Equipamentos Controller
 *
 * @property \App\Model\Table\EquipamentosTable $Equipamentos
 */
class EquipamentosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Equipamentos->find()
            ->contain(['Categorias', 'Marcas']);
        $equipamentos = $this->paginate($query);

        $this->set(compact('equipamentos'));
    }

    /**
     * View method
     *
     * @param string|null $id Equipamento id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $equipamento = $this->Equipamentos->get($id, contain: ['Categorias', 'Marcas', 'Equipaestoques']);
        $this->set(compact('equipamento'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $equipamento = $this->Equipamentos->newEmptyEntity();
        if ($this->request->is('post')) {
            $equipamento = $this->Equipamentos->patchEntity($equipamento, $this->request->getData());
            if ($this->Equipamentos->save($equipamento)) {
                $this->Flash->success(__('The equipamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipamento could not be saved. Please, try again.'));
        }
        $categorias = $this->Equipamentos->Categorias->find('list', limit: 200)->all();
        $marcas = $this->Equipamentos->Marcas->find('list', limit: 200)->all();
        $this->set(compact('equipamento', 'categorias', 'marcas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Equipamento id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $equipamento = $this->Equipamentos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $equipamento = $this->Equipamentos->patchEntity($equipamento, $this->request->getData());
            if ($this->Equipamentos->save($equipamento)) {
                $this->Flash->success(__('The equipamento has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The equipamento could not be saved. Please, try again.'));
        }
        $categorias = $this->Equipamentos->Categorias->find('list', limit: 200)->all();
        $marcas = $this->Equipamentos->Marcas->find('list', limit: 200)->all();
        $this->set(compact('equipamento', 'categorias', 'marcas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Equipamento id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $equipamento = $this->Equipamentos->get($id);
        if ($this->Equipamentos->delete($equipamento)) {
            $this->Flash->success(__('The equipamento has been deleted.'));
        } else {
            $this->Flash->error(__('The equipamento could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
