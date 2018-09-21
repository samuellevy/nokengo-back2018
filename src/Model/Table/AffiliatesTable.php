<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class AffiliatesTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->setTable('affiliates');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    $this->addBehavior('Timestamp');

    $this->hasMany('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Affiliate'
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

    return $validator;
  }

  public function buildRules(RulesChecker $rules)
  {
    // $rules->add($rules->existsIn(['author_id'], 'Authors'));
    // $rules->add($rules->existsIn(['update_author_id'], 'UpdateAuthors'));
    // $rules->add($rules->existsIn(['media_id'], 'Media'));

    return $rules;
  }
}
