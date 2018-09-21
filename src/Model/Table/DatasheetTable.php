<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Datasheet Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Works
 * @property \Cake\ORM\Association\BelongsTo $Categories
 *
 * @method \App\Model\Entity\Datasheet get($primaryKey, $options = [])
 * @method \App\Model\Entity\Datasheet newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Datasheet[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Datasheet|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Datasheet patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Datasheet[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Datasheet findOrCreate($search, callable $callback = null, $options = [])
 */
class DatasheetTable extends Table
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

        $this->setTable('datasheet');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Works', [
            'foreignKey' => 'work_id'
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
            ->allowEmpty('advertiser');

        $validator
            ->allowEmpty('project_title');

        $validator
            ->allowEmpty('agency_network');

        $validator
            ->allowEmpty('creative_director');

        $validator
            ->allowEmpty('art_director');

        $validator
            ->allowEmpty('writer');

        $validator
            ->allowEmpty('illustrator');

        $validator
            ->allowEmpty('photographer');

        $validator
            ->allowEmpty('music_producer');

        $validator
            ->allowEmpty('video_producer');

        $validator
            ->allowEmpty('production_company');

        return $validator;
    }
}
