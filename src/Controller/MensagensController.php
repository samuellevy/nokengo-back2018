<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Mensagens Controller
 *
 * @property \App\Model\Table\MensagensTable $Mensagens
 */
class MensagensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Captacaos']
        ];
        $mensagens = $this->paginate($this->Mensagens);

        $this->set(compact('mensagens'));
        $this->set('_serialize', ['mensagens']);
    }

    /**
     * View method
     *
     * @param string|null $id Mensagen id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $mensagen = $this->Mensagens->get($id, [
            'contain' => ['Users', 'Captacaos']
        ]);

        $this->set('mensagen', $mensagen);
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $mensagen = $this->Mensagens->newEntity();
        if ($this->request->is('post')) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->getData());
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pôde ser salvo.'));
        }
        $users = $this->Mensagens->Users->find('list', ['limit' => 200]);
        $captacaos = $this->Mensagens->Captacaos->find('list', ['limit' => 200]);
        $this->set(compact('mensagen', 'users', 'captacaos'));
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Mensagen id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $mensagen = $this->Mensagens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $mensagen = $this->Mensagens->patchEntity($mensagen, $this->request->getData());
            if ($this->Mensagens->save($mensagen)) {
                $this->Flash->success(__('Salvo com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Não pôde ser salvo.'));
        }
        $users = $this->Mensagens->Users->find('list', ['limit' => 200]);
        $captacaos = $this->Mensagens->Captacaos->find('list', ['limit' => 200]);
        $this->set(compact('mensagen', 'users', 'captacaos'));
        $this->set('_serialize', ['mensagen']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Mensagen id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $mensagen = $this->Mensagens->get($id);
        if ($this->Mensagens->delete($mensagen)) {
            $this->Flash->success(__('Removido com sucesso.'));
        } else {
            $this->Flash->error(__('Não pôde ser removido.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
