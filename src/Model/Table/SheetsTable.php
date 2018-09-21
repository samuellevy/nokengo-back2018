<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sheets Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Works
 * @property \Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Sheet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sheet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Sheet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sheet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sheet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sheet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sheet findOrCreate($search, callable $callback = null, $options = [])
 */
class SheetsTable extends Table
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

        $this->setTable('sheets');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Works', [
            'foreignKey' => 'work_id'
        ]);

        $this->belongsTo('WorkCategories', [
            'foreignKey' => 'category_id'
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
