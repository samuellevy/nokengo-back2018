<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Tabela Controller
 *
 * @property \App\Model\Table\TabelaTable $Tabela
 */
class TabelaController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $tabela = $this->paginate($this->Tabela);

        $this->set(compact('tabela'));
        $this->set('_serialize', ['tabela']);
    }

    /**
     * View method
     *
     * @param string|null $id Tabela id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tabela = $this->Tabela->get($id, [
            'contain' => ['Dentro']
        ]);

        $this->set('tabela', $tabela);
        $this->set('_serialize', ['tabela']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tabela = $this->Tabela->newEntity();
        if ($this->request->is('post')) {
            $tabela = $this->Tabela->patchEntity($tabela, $this->request->getData());
            // die(debug($tabela));
            if ($this->Tabela->save($tabela)) {
                $this->Flash->success(__('The tabela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tabela could not be saved. Please, try again.'));
        }
        $this->set(compact('tabela'));
        $this->set('_serialize', ['tabela']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tabela id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tabela = $this->Tabela->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tabela = $this->Tabela->patchEntity($tabela, $this->request->getData());
            if ($this->Tabela->save($tabela)) {
                $this->Flash->success(__('The tabela has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tabela could not be saved. Please, try again.'));
        }
        $this->set(compact('tabela'));
        $this->set('_serialize', ['tabela']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tabela id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tabela = $this->Tabela->get($id);
        if ($this->Tabela->delete($tabela)) {
            $this->Flash->success(__('The tabela has been deleted.'));
        } else {
            $this->Flash->error(__('The tabela could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
