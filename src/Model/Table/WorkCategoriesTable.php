<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * WorkCategories Model
 *
 * @method \App\Model\Entity\WorkCategory get($primaryKey, $options = [])
 * @method \App\Model\Entity\WorkCategory newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\WorkCategory[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\WorkCategory|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\WorkCategory patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\WorkCategory[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\WorkCategory findOrCreate($search, callable $callback = null, $options = [])
 */
class WorkCategoriesTable extends Table
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

        $this->setTable('work_categories');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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

        $validator
            ->allowEmpty('name');

        return $validator;
    }
}
