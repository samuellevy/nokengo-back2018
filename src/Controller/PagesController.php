<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class PagesController extends AppController
{
  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
    $configs['action'] = $this->request->action;
    $configs['matchedRoute'] = $this->request->params['_matchedRoute'];
    $configs['url'] =  '/'.strtolower($this->request->params['controller']).'/'.$this->request->action;
    $this->set(compact('configs'));

    // die(debug($this->request->params));
  }

  public function beforeRender(Event $event){
    parent::beforeRender($event);
  }

  public function home(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'home'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ],
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();

    $this->loadModel('Posts');
    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files'=>['conditions'=>['obs'=>'Capa']]
      ],
      'limit' => 4,
      'order'=>[
        'Posts.created'=>'DESC'
      ]
    ]);
    
    $posts = $posts->all();
    $posts = $posts->toArray();

    $this->loadModel('Works');
    $works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets',
        'medias'
      ],
      'limit' => 3,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>1, 'Works.status'=>1]
    ]);
    $works = $works->all();
    
    $randombanner = $this->Works->find('all', [
      'contain'=>[
        'files',
        'medias'
      ],
      'limit'=>10,
      'order' => ('Works.created DESC'),
      'conditions'=>['Works.status'=>1, 'Works.feature'=>1]
    ]);

    $randombanner = $randombanner->all()->toArray();

    // die(debug($randombanner));
    
    $this->loadModel('Testimonials');
    $testimonials = $this->Testimonials->find('all', [
      'contain'=>[
        'files'
      ],
      'limit' => 1,
      'order' => ['Testimonials.created' => 'DESC'],
    ]);
    $testimonials = $testimonials->all();

    $this->set(compact(['page', 'banners', 'posts', 'works', 'testimonials', 'randombanner']));
  }
  
  public function club(){
    $page = $this->Pages->find('all', [
      'conditions'=>[
        'slug'=>'club'
      ],
      'limit'=>1,
      'contain'=>[
        'PagesComponents'=>[
          'sort'=>['sort'=>'asc']
        ],
        'PagesComponents.Files',
      ]
    ]);
    $page = $page->first();

    $this->loadModel('Team');
    $team_top = $this->Team->find('all', [
      'contain'=>[
        'files'
      ],
      'conditions'=>['position !='=>'bottom']
    ]);
    $team_top = $team_top->all();

    $team_bottom = $this->Team->find('all', [
      'contain'=>[
        'files'
      ],
      'conditions'=>['position !='=>'top']
    ]);
    $team_bottom = $team_bottom->all();
    
    $this->loadModel('Documents');
    $documents = $this->Documents->find('all', [
      'contain'=>[
        'Files'
      ],
    ]);
    $documents = $documents->all();

    $title = 'O Clube';

    $this->set(compact(['page', 'team_top', 'team_bottom', 'documents', 'title']));


    // die(debug($page));
  }

  public function gallery($q=null){
    $this->viewBuilder()->setLayout('pages');
    $this->loadModel('Works');
    $categories = $this->Works->Sheets->WorkCategories->find('list');
    $categories = $categories->toArray();
    $conditions = null;
    $selected_category = null;

    $featured_works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets',
        'medias'
      ],
      'limit' => 3,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>1, 'Works.status'=>1]
    ]);
    $featured_works = $featured_works;
    
    $worksfull = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets',
        'medias'
      ],
      'limit' => 15,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.status'=>1]
    ]);
    $worksfull = $worksfull->all();

    $query = $this->request->query;
    if(isset($query['c'])){
      $category_id = array_search(strtolower($query['c']), array_map('strtolower', $categories));
      $conditions = ['category_id'=>$category_id];
    }else{
      $conditions = "";
    }
    if(isset($query['s'])){
      $search = $query['s'];
    } else{
      $search = "";
    }

    $works = $this->Works->find('all', [
      'contain'=>[
        'Files',
        'medias',
        'Sheets.WorkCategories',
      ],
      'limit' => 100,
      'order' => ['Works.created' => 'DESC'],
      'conditions'=>['Works.feature'=>0, 'Works.status'=>1, $conditions ]
    ]);
    if(isset($category_id)){
      $selected_category = $categories[$category_id];
    }

    $works = $works->all();
    $title = 'Galeria';
    // die(debug($works));
    $this->set(compact(['featured_works','works', 'selected_category', 'worksfull', 'title']));
  }
  
  public function galleryread($slug=null){
    $this->loadModel('Works');
    $work = $this->Works->getBySlug($slug);

    $works = $this->Works->find('all', [
      'contain'=>[
        'files',
        'Sheets.WorkCategories',
      ],
      'limit' => 15,
      'conditions'=>['Works.slug !='=>$slug]
    ]);
    $works = $works->all();
    $title = $work->sheet->project_title;
    $this->set(compact(['work', 'works', 'title']));
    // $this->set('_serialize', ['work', 'works']);
    // die(debug($work));
    
  }

  public function news(){
    $this->loadModel('Posts');
    $lastposts = $this->Posts->find('all', [
      'contain' => [
        'Files',
        'Capas',
        'Authors'
      ],
      'limit' => 3,
      'order'=>[
        'Posts.created'=>'DESC'
      ]
    ]);

    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files',
        'Miniaturas'
      ],
      'limit' => 15,
      'order'=>[
        'Posts.created'=>'DESC'
      ]
    ]);

    $lastposts = $lastposts->all();
    $posts = $posts->all();

    // die(debug($posts));

    $title = 'Novidades';
    $this->set(compact(['posts', 'lastposts', 'title']));
  }

  public function newsread($slug=null){
    $this->loadModel('Posts');
    $post = $this->Posts->getBySlug($slug);

    $posts = $this->Posts->find('all', [
      'contain'=>[
        'files',
        'Miniaturas'
      ],
      'limit' => 15,
      'conditions'=>['Posts.slug !='=>$slug],
      'order'=>[
        'created'=>'DESC'
      ]
    ]);
    $posts = $posts->all();
    $title = $post->title;
    $this->set(compact(['post', 'posts', 'title']));
    // $this->set('_serialize', ['post', 'posts']);
    // die(debug($post));
  }

  public function opinion($slug=null){
    $this->loadModel('Testimonials');
    if($slug==null){
      $testimonials = $this->Testimonials->find('all', [
        'contain'=>[
          'files',
        ],
        'limit' => 15
      ]);
      $testimonials = $testimonials->all();
      $testimonials = $testimonials->toArray();
    } else {
      $opinion = $this->Testimonials->getBySlug($slug);
      $opinions = $this->Testimonials->find('all', [
        'contain'=>[
          'files',
        ],
        'conditions'=>[
          'Testimonials.slug !='=>$slug,
        ],
        'limit' => 15
        ]);
        $opinions = $opinions->all();
        $opinions = $opinions->toArray();
      }
        
    // die(debug($testimonials));
    $title = 'Opinião';
    $this->set(compact(['testimonials', 'opinion', 'opinions', 'title']));
  }

  public function contact(){
    $this->loadModel('Contacts');
    $contacts = $this->Contacts->find('all');
    $contacts = $contacts->all();

    $this->set(compact(['posts','works','testimonials','contacts']));
    $title = 'Contato';
    $this->set(compact(['contacts', 'title']));
  }

}