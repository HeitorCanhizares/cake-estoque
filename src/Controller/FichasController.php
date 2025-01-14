<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Fichas Controller
 *
 * @property \App\Model\Table\FichasTable $Fichas
 */
class FichasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $query = $this->Fichas->find()
            ->contain(['Equipaestoques', 'Colaboradors']);
        $fichas = $this->paginate($query);

        $this->set(compact('fichas'));
    }

    /**
     * View method
     *
     * @param string|null $id Ficha id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ficha = $this->Fichas->get($id, contain: ['Equipaestoques', 'Colaboradors']);
        $this->set(compact('ficha'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ficha = $this->Fichas->newEmptyEntity();
        if ($this->request->is('post')) {
            $ficha = $this->Fichas->patchEntity($ficha, $this->request->getData());
            if ($this->Fichas->save($ficha)) {
                $this->Flash->success(__('The ficha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ficha could not be saved. Please, try again.'));
        }
        $equipaestoques = $this->Fichas->Equipaestoques->find('list', limit: 200)->all();
        $colaboradors = $this->Fichas->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('ficha', 'equipaestoques', 'colaboradors'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ficha id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ficha = $this->Fichas->get($id, contain: []);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ficha = $this->Fichas->patchEntity($ficha, $this->request->getData());
            if ($this->Fichas->save($ficha)) {
                $this->Flash->success(__('The ficha has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ficha could not be saved. Please, try again.'));
        }
        $equipaestoques = $this->Fichas->Equipaestoques->find('list', limit: 200)->all();
        $colaboradors = $this->Fichas->Colaboradors->find('list', limit: 200)->all();
        $this->set(compact('ficha', 'equipaestoques', 'colaboradors'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ficha id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ficha = $this->Fichas->get($id);
        if ($this->Fichas->delete($ficha)) {
            $this->Flash->success(__('The ficha has been deleted.'));
        } else {
            $this->Flash->error(__('The ficha could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
