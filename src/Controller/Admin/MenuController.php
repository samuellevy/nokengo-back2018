<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

class MenuController extends AppController
{
  public function index(){
    $menu = $this->paginate($this->Menu, [
      'contain'=>[
        //'ChildMenu'
        'ParentMenu'
      ]
    ]);
    $this->set(compact('menu'));
    $this->set('_serialize', ['menu']);
  }

  public function add(){
    $item = $this->Menu->newEntity();
    $items = $this->Menu->find('list', ['conditions'=>['parent_id'=>0]]);

    $this->loadModel('Pages');
    $pages = $this->Pages->find('list', ['keyField' => 'slug']);


    if ($this->request->is('post')) {
      $item = $this->Menu->patchEntity($item, $this->request->getData());
      if ($this->Menu->save($item)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    $this->set(compact('item', 'items', 'pages'));
    $this->set('_serialize', ['item', 'items']);
  }

  public function edit($id=null){
    $item = $this->Menu->get($id);
    $items = $this->Menu->find('list', ['conditions'=>['parent_id'=>0]]);

    $this->loadModel('Pages');
    $pages = $this->Pages->find('list', ['keyField' => 'slug']);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $item = $this->Menu->patchEntity($item, $this->request->getData());
      $data = $this->request->getData();
      if(!isset($data['status'])){
        $item->status = 0;
      }
      //die(debug($this->request->getData()));
      if ($this->Menu->save($item)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'edit',$id]);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('item', 'items', 'pages'));
    $this->set('_serialize', ['item', 'items']);
  }

  public function delete($id = null){
    $this->request->allowMethod(['post', 'delete']);
    $item = $this->Menu->get($id);
    if ($this->Menu->delete($item)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /** AJAX METHODS */
  public function changeStatus($id){
    $this->autoRender = false;
    $entity = $this->Menu->get($id);
    $status = $this->request->data['status'];

    if($status == 'toggle'){
      if($entity->status==1){
        $status=0;
      }else{
        $status=1;
      }
    }

    $entity->status=$status;

    $post_data = ['Menu.status'=>0];

    $table = $this->Menu->patchEntity($entity, $post_data);
    $this->Menu->save($table);  //update record
  }

}
