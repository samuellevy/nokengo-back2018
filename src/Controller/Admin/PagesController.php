<?php
namespace App\Controller\Admin;

use App\Controller\AppControllerAdmin;

class PagesController extends AppController
{

  public function home(){

  }

  public function index()
  {
    $pages = $this->paginate($this->Pages, [
      'contain' => 'PagesComponents'
    ]);

    $this->set(compact('pages'));
    $this->set('_serialize', ['pages']);
  }

  /**
  * View method
  *
  * @param string|null $id Page id.
  * @return \Cake\Network\Response|null
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function view($id = null)
  {
    $page = $this->Pages->get($id, [
      'contain' => []
    ]);

    $this->set('page', $page);
    $this->set('_serialize', ['page']);
  }

  /**
  * Add method
  *
  * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
  */
  public function add()
  {
    $page = $this->Pages->newEntity();
    if ($this->request->is('post')) {
      $page = $this->Pages->patchEntity($page, $this->request->getData());
      $page->type = 1;
      if ($this->Pages->save($page)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('page'));
    $this->set('_serialize', ['page']);
  }

  /**
  * Edit method
  *
  * @param string|null $id Page id.
  * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
  * @throws \Cake\Network\Exception\NotFoundException When record not found.
  */
  public function edit($id = null)
  {
    $page = $this->Pages->get($id, [
      'contain' => [
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ]
      ]
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $page = $this->Pages->patchEntity($page, $this->request->getData());
        // die(debug($page));
      if ($this->Pages->save($page)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('page'));
    $this->set('_serialize', ['page']);



    //die(debug($page));
  }

  /**
  * Delete method
  *
  * @param string|null $id Page id.
  * @return \Cake\Network\Response|null Redirects to index.
  * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
  */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $page = $this->Pages->get($id);
    if ($this->Pages->delete($page)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }
}
