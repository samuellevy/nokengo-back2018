<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Dentro Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tabelas
 *
 * @method \App\Model\Entity\Dentro get($primaryKey, $options = [])
 * @method \App\Model\Entity\Dentro newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Dentro[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Dentro|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Dentro patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Dentro[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Dentro findOrCreate($search, callable $callback = null, $options = [])
 */
class DentroTable extends Table
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

        $this->setTable('dentro');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Tabela', [
            'foreignKey' => 'tabela_id'
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
            ->allowEmpty('nome');

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
        $rules->add($rules->existsIn(['tabela_id'], 'Tabela'));

        return $rules;
    }
}
