<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Bookings Model
 *
 * @property \App\Model\Table\JobTypesTable&\Cake\ORM\Association\BelongsTo $JobTypes
 * @property \App\Model\Table\DeliveryStatusesTable&\Cake\ORM\Association\BelongsTo $DeliveryStatuses
 * @property \App\Model\Table\BookingStatusesTable&\Cake\ORM\Association\BelongsTo $BookingStatuses
 *
 * @method \App\Model\Entity\Booking newEmptyEntity()
 * @method \App\Model\Entity\Booking newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Booking[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Booking get($primaryKey, $options = [])
 * @method \App\Model\Entity\Booking findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Booking patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Booking[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Booking|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Booking saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Booking[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class BookingsTable extends Table
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

        $this->setTable('bookings');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('JobTypes', [
            'foreignKey' => 'job_type_id',
        ]);
        $this->belongsTo('DeliveryStatuses', [
            'foreignKey' => 'delivery_status_id',
        ]);
        $this->belongsTo('BookingStatuses', [
            'foreignKey' => 'booking_status_id',
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
            ->scalar('amount')
            ->maxLength('amount', 50)
            ->allowEmptyString('amount');

        $validator
            ->dateTime('pickup_date_time')
            ->allowEmptyDateTime('pickup_date_time');

        $validator
            ->scalar('pickup_location')
            ->maxLength('pickup_location', 255)
            ->requirePresence('pickup_location', 'create')
            ->notEmptyString('pickup_location');

        $validator
            ->scalar('drop_location')
            ->maxLength('drop_location', 255)
            ->requirePresence('drop_location', 'create')
            ->notEmptyString('drop_location');

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
        $rules->add($rules->existsIn(['job_type_id'], 'JobTypes'), ['errorField' => 'job_type_id']);
        $rules->add($rules->existsIn(['delivery_status_id'], 'DeliveryStatuses'), ['errorField' => 'delivery_status_id']);
        $rules->add($rules->existsIn(['booking_status_id'], 'BookingStatuses'), ['errorField' => 'booking_status_id']);

        return $rules;
    }
}
