<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* BlogTags Controller
*
* @property \App\Model\Table\BlogTagsTable $BlogTags
*/
class BlogTagsController extends AppController
{
  public function index()
  {
    $tags = $this->paginate($this->BlogTags);

    $this->set(compact('tags'));
    $this->set('_serialize', ['tags']);
  }

  public function add()
  {
    $tag = $this->BlogTags->newEntity();

    if ($this->request->is('post')) {
      $tag = $this->BlogTags->patchEntity($tag, $this->request->getData());
      
      if ($this->BlogTags->save($tag)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('tag'));
    $this->set('_serialize', ['tag']);
  }

  public function edit($id = null)
  {
    $tag = $this->BlogTags->get($id);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $tag = $this->BlogTags->patchEntity($tag, $this->request->getData());
      if ($this->BlogTags->save($tag)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('tag'));
    $this->set('_serialize', ['tag']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $tag = $this->BlogTags->get($id);
    if ($this->BlogTags->delete($tag)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }
    return $this->redirect(['action' => 'index']);
  }

}
