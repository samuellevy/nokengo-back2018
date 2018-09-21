<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

class PostsController extends AppController
{
  //public $helpers = array('FormatDate');

  public function beforeFilter(Event $event){
    parent::beforeFilter($event);

    $this->loadModel('Posts');

    $popular_posts = $this->Posts->find('all',[
      'contain'=>[
        'BlogCategories',
        'BlogPostTags.BlogTags',
        'Files',
        'Authors'
      ],
      'order'=>[
        'Posts.id'=>'DESC'
      ],
      'limit'=>10
    ]);
    $results = $popular_posts->all();
    $popular_posts = $popular_posts->toArray();

    $categories_post = $this->Posts->BlogCategories->find('all');
    $categories_post = $categories_post->toArray();

    $tags_post = $this->Posts->BlogPostTags->find('all',['contain'=>['BlogTags']]);
    $tags_post = $tags_post->toArray();

    $tags = $this->Posts->BlogTags->find('all');
    $tags = $tags->toArray();

    $this->set(compact('popular_posts', 'categories_post', 'tags_post', 'tags'));
    $this->set('_serialize', ['popular_posts', 'categories_post', 'tags_post', 'tags']);
  }

  public function index(){
    $type = null;
    $tag = null;
    $category_id = 0;
    $conditions = [];
    
    if($this->request->getQuery()){
       $queries = $this->request->getQuery();
      if(isset($queries['type'])){
        $type=$queries['type'];
      }
      if(isset($queries['tag'])){
        $tag=$queries['tag'];
      }
    }

    $categories = $this->Posts->BlogCategories->find('all', ['conditions'=>['slug'=>$type]]);
    $categories = $categories->toArray();

    if(isset($categories[0])){
      $category_id = $categories[0]['id'];
      if($category_id != null){
        $conditions['Posts.category_id'] = $category_id;
      }
    }
    if(isset($tag)){
      $_SESSION['condition_tag'] = ['BlogTags.name'=>$tag];
    }else{
      $_SESSION['condition_tag'] = [];
    }

    $posts = $this->paginate(
      $this->Posts->find('all',['conditions'=>$conditions, 'order'=>['created DESC']])
        ->contain(['BlogCategories','BlogPostTags.BlogTags','Capas', 'Miniaturas','Authors'])
        // ->matching('BlogPostTags.BlogTags', function(\Cake\ORM\Query $q) {
        //   // return $q->where($_SESSION['condition_tag']);
        //   return $q->where([]);
        // })
        // ->innerJoinWith('BlogPostTags.BlogTags', function(\Cake\ORM\Query $q) {
        //     return $q->where($_SESSION['condition_tag']);
        // })
    );

    // die(debug($posts));

    
    

    // $posts = $this->Posts->find()->contain('BlogPostTags.BlogTags')->matching('BlogPostTags.BlogTags', function(\Cake\ORM\Query $q) {
    //     return $q->where(['BlogTags.name' => 'Direito']);
    // });

    // $items = $this->paginate(
    // $this->Disciplines
    //   ->find()
    //   ->matching('Semesters', function(\Cake\ORM\Query $q) use ($semester_id) {
    //     return $q->where([
    //       'Semesters.id' => $semester_id
    //     ]);
    //   })
    //   ->group(['Disciplines.id'])
    // );

    // die(debug($posts));

    $this->set(compact('posts','category_id', 'categories', 'type'));
    $this->set('_serialize', ['posts']);
  }

  public function view($id = null){
    $conditions = [];
    $category_id = 0;

    $post = $this->Posts->get($id, [
      'contain' => [
        'BlogCategories',
        'BlogPostTags.BlogTags',
        'Capas',
        'Miniaturas',
        'Authors'
      ]
    ]);

    $category_id = $post->category_id;

    $this->set(compact('post','category_id'));
    $this->set('_serialize', ['post']);
  }

}
