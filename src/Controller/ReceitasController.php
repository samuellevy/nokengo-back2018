<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Receitas Controller
 *
 * @property \App\Model\Table\ReceitasTable $Receitas
 */
class ReceitasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $receitas = $this->paginate($this->Receitas);

        $this->set(compact('receitas'));
        $this->set('_serialize', ['receitas']);
    }

    /**
     * View method
     *
     * @param string|null $id Receita id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $receita = $this->Receitas->get($id, [
            'contain' => ['Files']
        ]);

        $this->set('receita', $receita);
        $this->set('_serialize', ['receita']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $receita = $this->Receitas->newEntity();
        if ($this->request->is('post')) {
            $receita = $this->Receitas->patchEntity($receita, $this->request->getData());
            if ($this->Receitas->save($receita)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pôde ser salvo.'));
        }
        $this->set(compact('receita'));
        $this->set('_serialize', ['receita']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Receita id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $receita = $this->Receitas->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $receita = $this->Receitas->patchEntity($receita, $this->request->getData());
            if ($this->Receitas->save($receita)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('TNão pôde ser salvo.'));
        }
        $this->set(compact('receita'));
        $this->set('_serialize', ['receita']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Receita id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $receita = $this->Receitas->get($id);
        if ($this->Receitas->delete($receita)) {
            $this->Flash->success(__('Removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não pôde ser removido.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
