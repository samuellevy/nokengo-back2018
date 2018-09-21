<?php
namespace App\Controller\Admin;
use App\Controller\AppControllerAdmin;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class WorksController extends AppController
{
	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
	}

	public function initialize(){
		parent::initialize();
		$this->loadComponent('Fix');
	}
	
	public function index(){
		$this->paginate = [
			'contain' => ['Sheets']
		];
		$works = $this->paginate($this->Works);
		
    $this->set(compact(['works']));
    $this->set('_serialize', ['works']);
		// die(debug($works->all()));
	}
	
	/** AJAX METHODS */
	public function changeStatus($id){
		$this->autoRender = false;
		$entity = $this->Works->get($id);
		$status = $this->request->data['status'];
		$field = $this->request->data['field'];
		// echo $field;
		
		if($status == 'toggle'){
			if($entity[$field]==1){
				$status=0;
			}else{
				$status=1;
			}
		}
		
		$entity[$field]=$status;
		
		$post_data = ['Works.'.$field=>0];
		
		$table = $this->Works->patchEntity($entity, $post_data);
		$this->Works->save($table);  //update record
	}

	public function add(){
		$work = $this->Works->newEntity();
		$works = $this->Works->find('list', ['conditions'=>['parent_id'=>0]]);

		$this->loadModel('WorkCategories');
		$categories = $this->WorkCategories->find('list', ['limit' => 200, 'order'=>['id'=>'ASC']]);

		if ($this->request->is('post')) {
			$data = $this->request->getData();
			$work = $this->Works->patchEntity($work, $data,[
			'associated' => [
				'WorkCategories',
				'Files'
			]
		]);
		
		if ($this->Works->save($work)) {
			$this->Flash->success(__('Salvo com sucesso.'));

			return $this->redirect(['action' => 'index']);
		}
		$this->Flash->error(__('Não pôde ser salvo.'));
		}

		$this->set(compact(['work', 'works', 'categories']));
		$this->set('_serialize', ['work', 'works']);
	}

	public function edit($id=null){
		$work = $this->Works->get($id);
		$works = $this->Works->find('list', ['conditions'=>['parent_id'=>0]]);

		if ($this->request->is(['patch', 'post', 'put'])) {
			$work = $this->Works->patchEntity($work, $this->request->getData());
			$data = $this->request->getData();

			if ($this->Works->save($work)) {
				$this->Flash->success(__('Salvo com sucesso.'));

				return $this->redirect(['action' => 'index']);
			}
			$this->Flash->error(__('Não pôde ser salvo.'));
		}

		$this->loadModel('WorkCategories');
		$categories = $this->WorkCategories->find('list', ['limit' => 200, 'order'=>['id'=>'ASC']]);

		$this->set(compact('work', 'works', 'pages', 'categories'));
		$this->set('_serialize', ['work', 'works']);
	}

	  public function view($id = null)
  {
		$work = $this->Works->get($id, [
		'contain' => [
			'Files',
			'Sheets',
			'medias'
		]
		]);

		$this->set('work', $work);
		$this->set('_serialize', ['work']);
	}

	public function delete($id = null){
		$this->request->allowMethod(['post', 'delete']);
		$work = $this->Works->get($id);
		
		if ($this->Works->delete($work)) {
			$this->Flash->success(__('Removido com sucesso.'));
		} else {
			$this->Flash->error(__('Não pôde ser removido.'));
		}

		return $this->redirect(['action' => 'index']);
	}
}
