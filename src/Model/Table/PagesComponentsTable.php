<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PagesComponents Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pages
 * @property \Cake\ORM\Association\BelongsTo $Components
 *
 * @method \App\Model\Entity\PagesComponent get($primaryKey, $options = [])
 * @method \App\Model\Entity\PagesComponent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PagesComponent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PagesComponent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PagesComponent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PagesComponent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PagesComponent findOrCreate($search, callable $callback = null, $options = [])
 */
class PagesComponentsTable extends Table
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

        $this->setTable('pages_components');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Pages', [
            'foreignKey' => 'page_id'
        ]);
        $this->belongsTo('Components', [
            'foreignKey' => 'component_id'
        ]);
        
        $this->hasMany('Files', [
          'className' => 'Files',
          'foreignKey' => 'model_id',
          'conditions' => [
            'entity' => 'PageComponent'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['page_id'], 'Pages'));
        $rules->add($rules->existsIn(['component_id'], 'Components'));

        return $rules;
    }
}
