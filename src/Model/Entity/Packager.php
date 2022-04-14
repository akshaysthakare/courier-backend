<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Packager Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $email
 * @property int|null $mobile
 * @property string|null $address
 * @property string|null $city
 * @property string|null $state
 * @property int $packager_status_id
 * @property int $payment_type_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\PackagerStatus $packager_status
 * @property \App\Model\Entity\PaymentType $payment_type
 */
class Packager extends Entity
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
        'email' => true,
        'mobile' => true,
        'address' => true,
        'city' => true,
        'state' => true,
        'packager_status_id' => true,
        'payment_type_id' => true,
        'created' => true,
        'modified' => true,
        'packager_status' => true,
        'payment_type' => true,
    ];
}
