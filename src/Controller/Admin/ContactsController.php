<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Contacts Controller
*
* @property \App\Model\Table\ContactsTable $Contacts
*/
class ContactsController extends AppController
{
  public function index()
  {
    $contacts = $this->paginate($this->Contacts);

    $this->set(compact('contacts'));
    $this->set('_serialize', ['contacts']);
  }

  public function add()
  {
    $contact = $this->Contacts->newEntity();

    if ($this->request->is('post')) {
      $contact = $this->Contacts->patchEntity($contact, $this->request->getData(),[
        'associated' => [
          
        ]
      ]);
      if ($this->Contacts->save($contact)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('contact'));
    $this->set('_serialize', ['contact']);
  }

  public function view($id = null)
  {
    $contact = $this->Contacts->get($id, [
      'contain' => []
    ]);

    $this->set('contact', $contact);
    $this->set('_serialize', ['contact']);
  }

  public function edit($id = null)
  {
    $contact = $this->Contacts->get($id);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $contact = $this->Contacts->patchEntity($contact, $this->request->getData());


      if ($this->Contacts->save($contact)) {
        $this->Flash->success(__('Salvo com sucesso.'));
        return $this->redirect(['action' => 'edit',$id]);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('contact'));
    $this->set('_serialize', ['contact']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $contact = $this->Contacts->get($id);
    if ($this->Contacts->delete($contact)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  
}
