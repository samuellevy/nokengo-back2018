<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Receitas Model
 *
 * @property \Cake\ORM\Association\HasMany $Files
 *
 * @method \App\Model\Entity\Receita get($primaryKey, $options = [])
 * @method \App\Model\Entity\Receita newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Receita[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Receita|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Receita patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Receita[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Receita findOrCreate($search, callable $callback = null, $options = [])
 */
class ReceitasTable extends Table
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

        $this->setTable('receitas');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Files', [
            'foreignKey' => 'receita_id'
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

        $validator
            ->allowEmpty('name');

        return $validator;
    }
}
