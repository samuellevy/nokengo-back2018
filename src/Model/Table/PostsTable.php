<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Posts Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Categories
 * @property \Cake\ORM\Association\BelongsTo $Media
 * @property \Cake\ORM\Association\BelongsTo $CoverMedia
 * @property \Cake\ORM\Association\BelongsTo $Authors
 * @property \Cake\ORM\Association\BelongsTo $UpdateAuthors
 *
 * @method \App\Model\Entity\Post get($primaryKey, $options = [])
 * @method \App\Model\Entity\Post newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Post[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Post|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Post patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Post[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Post findOrCreate($search, callable $callback = null, $options = [])
 */
class PostsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('posts');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('BlogCategories', [
          'foreignKey' => 'category_id',
        ]);

        $this->hasMany('BlogPostTags', [
          'foreignKey' => 'post_id',
        ]);

        $this->belongsTo('BlogTags', [
            'foreignKey' => 'tag_id',
        ]);

        $this->belongsTo('Authors', [
            'className'=>'Users',
            'foreignKey' => 'author_id',
        ]);

        $this->hasMany('BlogPostTags', [
          'foreignKey' => 'post_id'
        ]);

        $this->hasMany('Files', [
          'className' => 'Files',
          'foreignKey' => 'model_id',
          'conditions' => [
            'entity' => 'Post'
          ]
        ]);

        $this->hasMany('Miniaturas', [
          'className' => 'Files',
          'foreignKey' => 'model_id',
          'conditions' => [
            'entity' => 'Post',
            'obs' => 'Miniatura'
          ]
        ]);

        $this->hasMany('Capas', [
          'className' => 'Files',
          'foreignKey' => 'model_id',
          'conditions' => [
            'entity' => 'Post',
            'obs' => 'Capa'
          ]
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');


        return $validator;
    }
    function getBySlug($slug){
      $post = $this->find('all',[
        'conditions'=>['slug'=>$slug],
        'contain' => [
          'Files',
          'Capas'
        ]
      ])->first();
      
      return $post;
    }
}
