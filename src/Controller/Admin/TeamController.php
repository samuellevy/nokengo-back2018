<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

/**
* Team Controller
*
* @property \App\Model\Table\TeamTable $Team
*/
class TeamController extends AppController
{
  public function index()
  {
    $team = $this->paginate($this->Team, [
      'contain'=>[
        'Files',
      ],
      'order'=>[
        'id'=>'ASC'
      ]
    ]);
    //die(debug($team));
    $this->set(compact('team'));
    $this->set('_serialize', ['team']);
  }

  public function add()
  {
    $team = $this->Team->newEntity();

    if ($this->request->is('post')) {
      $team = $this->Team->patchEntity($team, $this->request->getData(),[
        'associated' => [
          'Files'
        ]
      ]);

      if ($this->Team->save($team)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo.'));
    }
    $this->set(compact('team'));
    $this->set('_serialize', ['team']);
  }

  public function view($id = null)
  {
    $team = $this->Team->get($id, [
      'contain' => [
        'BlogCategories',
        'BlogInstituteTags.Tags',
        'Files'
      ]
    ]);

    $this->set('team', $team);
    $this->set('_serialize', ['team']);
  }

  public function edit($id = null)
  {
    $team = $this->Team->get($id, [
      'contain' => [
        'Files'
      ]
    ]);

    if ($this->request->is(['patch', 'post', 'put'])) {
      $old_team = $team;
      $old_files = $team->getOriginal('files');
      $team = $this->Team->patchEntity($team, $this->request->getData());
      // procura file vazio
      foreach($team->files as $key=>$file){
        if(empty($team->files[$key]->filename)){
          unset($team->files[$key]);
        }else{
          if(!empty($old_files[0])){
            foreach($old_files as $old_file){
              if($file->obs == $old_file->obs){
                $this->delete_file($old_file->id);
              }
            }
          }
        }
      }
      if ($this->Team->save($team)) {
        $this->Flash->success(__('Salvo com sucesso.'));

        return $this->redirect(['action' => 'index']);
      }
      $this->Flash->error(__('Não pôde ser salvo..'));
    }
    $this->set(compact('team'));
    $this->set('_serialize', ['team']);
  }

  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $team = $this->Team->get($id);
    if ($this->Team->delete($team)) {
      $this->Flash->success(__('Removido com sucesso.'));
    } else {
      $this->Flash->error(__('Não pôde ser removido.'));
    }

    return $this->redirect(['action' => 'index']);
  }

  /* AJAX methods */

  public function delete_file($file_id = null, $team_id=null){
    $this->autoRender = false;
    $entity = $this->Team->Files->get($file_id);

    if($this->Team->Files->delete($entity)){
      echo('1');
    }
  }
}
