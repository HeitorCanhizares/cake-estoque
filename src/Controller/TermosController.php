<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Termos Controller
 *
 * @property \App\Model\Table\TermosTable $Termos
 */
class TermosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Termos->find()
            ->contain(['Colaboradors']);
        $termos = $this->paginate($query);

        $this->set(compact('termos'));
    }

    /**
     * View method
     *
     * @param string|null $id Termo id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $termo = $this->Termos->get($id, contain: ['Colaboradors']);
        $this->set(compact('termo'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $termo = $this->Termos->newEmptyEntity();
        if ($this->request->is('post')) {
            $termo = $this->Termos->patchEntity($termo, $this->request->getData());
            if ($this->Termos->save($termo)) {
                $this->Flash->success(__('The termo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The termo could not be saved. Please, try again.'));
        }
        $colaboradors = $this->Termos->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('termo', 'colaboradors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Termo id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $termo = $this->Termos->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $termo = $this->Termos->patchEntity($termo, $this->request->getData());
            if ($this->Termos->save($termo)) {
                $this->Flash->success(__('The termo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The termo could not be saved. Please, try again.'));
        }
        $colaboradors = $this->Termos->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('termo', 'colaboradors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Termo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $termo = $this->Termos->get($id);
        if ($this->Termos->delete($termo)) {
            $this->Flash->success(__('The termo has been deleted.'));
        } else {
            $this->Flash->error(__('The termo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
