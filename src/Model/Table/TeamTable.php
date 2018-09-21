<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
* Team Model
*
* @property \Cake\ORM\Association\BelongsTo $Media
* @property \Cake\ORM\Association\BelongsTo $Departments
*
* @method \App\Model\Entity\Team get($primaryKey, $options = [])
* @method \App\Model\Entity\Team newEntity($data = null, array $options = [])
* @method \App\Model\Entity\Team[] newEntities(array $data, array $options = [])
* @method \App\Model\Entity\Team|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
* @method \App\Model\Entity\Team patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
* @method \App\Model\Entity\Team[] patchEntities($entities, array $data, array $options = [])
* @method \App\Model\Entity\Team findOrCreate($search, callable $callback = null, $options = [])
*/
class TeamTable extends Table
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

    $this->setTable('team');
    $this->setDisplayField('name');
    $this->setPrimaryKey('id');

    // $this->belongsTo('Departments', [
    //   'foreignKey' => 'department_id'
    // ]);
    
    $this->hasMany('Files', [
      'className' => 'Files',
      'foreignKey' => 'model_id',
      'conditions' => [
        'entity' => 'Team'
      ]
    ]);
  }

  /**
  * Default validation rules.
  *
  * @param \Cake\Validation\Validator $validator Validator instance.
  * @return \Cake\Validation\Validator
  */
  public function validationDefault(Validator $validator)
  {
    $validator
    ->integer('id')
    ->allowEmpty('id', 'create');

    return $validator;
  }
}
