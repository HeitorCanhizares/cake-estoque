<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Colaboradors Controller
 *
 * @property \App\Model\Table\ColaboradorsTable $Colaboradors
 */
class ColaboradorsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Colaboradors->find();
        $colaboradors = $this->paginate($query);

        $this->set(compact('colaboradors'));
    }

    /**
     * View method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $colaborador = $this->Colaboradors->get($id, contain: ['Entradas', 'Fichas', 'Inventarios', 'Solicitacaos', 'Termos', 'Users']);
        $this->set(compact('colaborador'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $colaborador = $this->Colaboradors->newEmptyEntity();
        if ($this->request->is('post')) {
            $colaborador = $this->Colaboradors->patchEntity($colaborador, $this->request->getData());
            if ($this->Colaboradors->save($colaborador)) {
                $this->Flash->success(__('The colaborador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colaborador could not be saved. Please, try again.'));
        }
        $this->set(compact('colaborador'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $colaborador = $this->Colaboradors->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $colaborador = $this->Colaboradors->patchEntity($colaborador, $this->request->getData());
            if ($this->Colaboradors->save($colaborador)) {
                $this->Flash->success(__('The colaborador has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The colaborador could not be saved. Please, try again.'));
        }
        $this->set(compact('colaborador'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Colaborador id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $colaborador = $this->Colaboradors->get($id);
        if ($this->Colaboradors->delete($colaborador)) {
            $this->Flash->success(__('The colaborador has been deleted.'));
        } else {
            $this->Flash->error(__('The colaborador could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
