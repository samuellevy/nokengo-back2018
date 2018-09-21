<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class TestimonialsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('testimonials');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->hasMany('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Testimonial'
      ]
    ]);
  }

  public function validationDefault(Validator $validator)
  {
    $validator
    ->integer('id')
    ->allowEmpty('id', 'create');

    $validator
    ->requirePresence('name', 'create')
    ->notEmpty('name');

    $validator
    ->requirePresence('testimony', 'create')
    ->notEmpty('testimony');

    return $validator;
  }

  function getBySlug($slug){
    $testimonial = $this->find('all',[
      'conditions'=>['slug'=>$slug],
      'contain' => ['files']
    ])->first();
    
    return $testimonial;
  }


}
