<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* BlogCategories Controller
*
* @property \App\Model\Table\BlogCategoriesTable $BlogCategories
*/
class BlogCategoriesController extends AppController
{
  public function index()
  {
    $categories = $this->paginate($this->BlogCategories);

    $this->set(compact('categories'));
    $this->set('_serialize', ['categories']);
  }

  public function add()
  {
    $category = $this->BlogCategories->newEntity();

    if ($this->request->is('post')) {
      $category = $this->BlogCategories->patchEntity($category, $this->request->getData());
      if ($this->BlogCategories->save($category)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('category'));
    $this->set('_serialize', ['category']);
  }

  public function edit($id = null)
  {
    $category = $this->BlogCategories->get($id);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $category = $this->BlogCategories->patchEntity($category, $this->request->getData());
      if ($this->BlogCategories->save($category)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('category'));
    $this->set('_serialize', ['category']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $category = $this->BlogCategories->get($id);
    if ($this->BlogCategories->delete($category)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
