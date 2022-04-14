<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Packagers Model
 *
 * @property \App\Model\Table\PackagerStatusesTable&\Cake\ORM\Association\BelongsTo $PackagerStatuses
 * @property \App\Model\Table\PaymentTypesTable&\Cake\ORM\Association\BelongsTo $PaymentTypes
 *
 * @method \App\Model\Entity\Packager newEmptyEntity()
 * @method \App\Model\Entity\Packager newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Packager[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Packager get($primaryKey, $options = [])
 * @method \App\Model\Entity\Packager findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Packager patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Packager[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Packager|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Packager saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Packager[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Packager[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Packager[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Packager[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PackagersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('packagers');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('PackagerStatuses', [
            'foreignKey' => 'packager_status_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('PaymentTypes', [
            'foreignKey' => 'payment_type_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->email('email')
            ->allowEmptyString('email');

        $validator
            ->integer('mobile')
            ->allowEmptyString('mobile');

        $validator
            ->scalar('address')
            ->maxLength('address', 255)
            ->allowEmptyString('address');

        $validator
            ->scalar('city')
            ->maxLength('city', 255)
            ->allowEmptyString('city');

        $validator
            ->scalar('state')
            ->maxLength('state', 255)
            ->allowEmptyString('state');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['packager_status_id'], 'PackagerStatuses'), ['errorField' => 'packager_status_id']);
        $rules->add($rules->existsIn(['payment_type_id'], 'PaymentTypes'), ['errorField' => 'payment_type_id']);

        return $rules;
    }
}
