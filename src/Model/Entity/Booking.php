<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Booking Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $amount
 * @property int|null $job_type_id
 * @property int|null $delivery_status_id
 * @property \Cake\I18n\FrozenTime|null $pickup_date_time
 * @property string $pickup_location
 * @property string $drop_location
 * @property int $booking_status_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\JobType $job_type
 * @property \App\Model\Entity\DeliveryStatus $delivery_status
 * @property \App\Model\Entity\BookingStatus $booking_status
 */
class Booking extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'amount' => true,
        'job_type_id' => true,
        'delivery_status_id' => true,
        'pickup_date_time' => true,
        'pickup_location' => true,
        'drop_location' => true,
        'booking_status_id' => true,
        'created' => true,
        'modified' => true,
        'job_type' => true,
        'delivery_status' => true,
        'booking_status' => true,
    ];
}
