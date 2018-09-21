<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Documents Controller
*
* @property \App\Model\Table\DocumentsTable $Documents
*/
class DocumentsController extends AppController
{
  public function index()
  {
    $documents = $this->paginate($this->Documents, [
      'contain'=>[
        'Files',
      ],
      'order'=>[
        'id'=>'ASC'
      ]
    ]);
    //die(debug($documents));
    $this->set(compact('documents'));
    $this->set('_serialize', ['documents']);
  }

  public function add()
  {
    $document = $this->Documents->newEntity();

    if ($this->request->is('post')) {
      $document = $this->Documents->patchEntity($document, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Documents->save($document)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('document'));
    $this->set('_serialize', ['document']);
  }

  public function view($id = null)
  {
    $documents = $this->Documents->get($id, [
      'contain' => [
        'BlogCategories',
        'BlogInstituteTags.Tags',
        'Files'
      ]
    ]);

    $this->set('documents', $documents);
    $this->set('_serialize', ['documents']);
  }

  public function edit($id = null)
  {
    $document = $this->Documents->get($id, [
      'contain' => [
        'Files'
      ]
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $old_document = $document;
      $old_files = $document->getOriginal('files');
      $document = $this->Documents->patchEntity($document, $this->request->getData());
      // procura file vazio
      
      if ($this->Documents->save($document)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo..'));
    }
    
    $this->set(compact('document'));
    $this->set('_serialize', ['document']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $documents = $this->Documents->get($id);
    if ($this->Documents->delete($documents)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  public function delete_file($file_id = null, $documents_id=null){
    $this->autoRender = false;
    $entity = $this->Documents->Files->get($file_id);

    if($this->Documents->Files->delete($entity)){
      echo('1');
    }
  }
}
