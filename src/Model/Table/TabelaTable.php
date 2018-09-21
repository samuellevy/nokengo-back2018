<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tabela Model
 *
 * @property \Cake\ORM\Association\HasMany $Dentro
 *
 * @method \App\Model\Entity\Tabela get($primaryKey, $options = [])
 * @method \App\Model\Entity\Tabela newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Tabela[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Tabela|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Tabela patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Tabela[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Tabela findOrCreate($search, callable $callback = null, $options = [])
 */
class TabelaTable extends Table
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

        $this->setTable('tabela');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Dentro', [
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
}
