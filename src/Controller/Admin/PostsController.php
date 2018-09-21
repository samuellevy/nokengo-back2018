<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Posts Controller
*
* @property \App\Model\Table\PostsTable $Posts
*/
class PostsController extends AppController
{
  public function initialize(){
    parent::initialize();
    $this->loadComponent('Fix');
  }

  public function index()
  {
    $posts = $this->paginate($this->Posts, [
      'contain'=>[
        'BlogCategories'
      ],
      'order'=>[
        'id'=>'DESC'
      ]
    ]);

    $this->set(compact('posts'));
    $this->set('_serialize', ['posts']);
  }

  public function add()
  {

    $post = $this->Posts->newEntity();
    $posts = $this->Posts->find('all')->all()->toArray();
    $categories = $this->Posts->BlogCategories->find('list', ['limit' => 200, 'order'=>['id'=>'ASC']]);
    
    if ($this->request->is('post')) {
      
      $post = $this->Posts->patchEntity($post, $this->request->getData(),[
        'associated' => [
          'BlogCategories',
          'BlogPostTags.Tags',
          'Files'
        ]
      ]); 

      $slug = $this->Fix->toSlug($post->title);
      $count = 1;
      foreach ($posts as $item){
        if ($this->Fix->toSlug($item->title) == $slug){
          $count++;
        }
      }
      if ($count > 1){
        $post->slug = $slug.$count;
      } else{
        $post->slug = $slug;
      }
      
      if ($this->Posts->save($post)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('post', 'categories'));
    $this->set('_serialize', ['post']);
  }

  public function view($id = null)
  {
    $post = $this->Posts->get($id, [
      'contain' => [
        'BlogCategories',
        'BlogPostTags.Tags',
        'Files'
      ]
    ]);

    $this->set('post', $post);
    $this->set('_serialize', ['post']);
  }

  public function edit($id = null)
  {
    $post = $this->Posts->get($id, [
      // 'fields'=>'id',
      'contain' => [
        'BlogCategories',
        'BlogPostTags.BlogTags',
        'Miniaturas',
        'Capas'
      ]
    ]);

    $categories = $this->Posts->BlogCategories->find('list', ['limit' => 200, 'order'=>['id'=>'ASC']]);
    
    if ($this->request->is(['patch', 'post', 'put'])) {
      $post = $this->Posts->patchEntity($post, $this->request->getData());

      foreach($post->files as $key_file=>$file){
        if($file->filename==''){
          unset($post->files[$key_file]);
        }
      }

      if ($this->Posts->save($post)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }

    // die(debug($post));
    $this->set(compact('post','categories'));
    $this->set('_serialize', ['post']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $post = $this->Posts->get($id);
    if ($this->Posts->delete($post)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  public function delete_file($file_id = null, $post_id=null){
    $this->autoRender = false;
    $entity = $this->Posts->Files->get($file_id);

    if($this->Posts->Files->delete($entity)){
      echo('1');
    }
  }
}
