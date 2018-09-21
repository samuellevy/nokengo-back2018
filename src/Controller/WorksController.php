<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class WorksController extends AppController
{
	public function beforeFilter(Event $event){
		parent::beforeFilter($event);
		$this->viewBuilder()->setLayout('pages');

		$configs['action'] = $this->request->action;
		$configs['matchedRoute']= $this->request->params['_matchedRoute'];
		$configs['url'] =  '/'.strtolower($this->request->params['controller']).'/'.$this->request->action;
		$this->set(compact('configs'));
	}

	public function beforeRender(Event $event){
		parent::beforeRender($event);
	}

	public function add()
	{

		$work = $this->Works->newEntity();
		$works = $this->Works->find('all')->all()->toArray();

		if ($this->request->is('post')) {
			$work = $this->Works->patchEntity($work, $this->request->getData());
			foreach($work->files as $key=>$file){
				$file->entity = 'Work';
				if($file->filename==''){
					unset($work->files[$key]);
				}
			}
			foreach($work->medias as $key=>$media){
				if($media->url==''){
					unset($work->medias[$key]);
				}
			}

			$slug = $this->Fix->toSlug($work->sheet->project_title);
			$count = 1;
			foreach ($works as $item){
				if ($this->Fix->toSlug($item->title) == $slug){
				$count++;
				}
			}
			
			if ($count > 1){
				$work->slug = $slug.$count;
			} else{
				$work->slug = $slug;
			}

			if ($this->Works->save($work)) {
				$this->Flash->success(__('Sua peça foi enviada com sucesso.'));
				return $this->redirect(['action' => 'add']);
			}else{
				$this->Flash->error(__('Não foi possível enviar sua peça. Verifique os campos.'));
			}
		}
		
		$categories = $this->Works->Sheets->WorkCategories->find('list');
		$title = 'Envie sua peça';
		$this->set(compact(['work','categories', 'title']));
	}
	
	public function index(){
		$works = $this->Works->find('all', ['contain'=>['Sheets']]);
		die(debug($works->all()));
	}
}
