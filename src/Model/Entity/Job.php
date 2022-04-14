<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Job Entity
 *
 * @property int $id
 * @property string $pickup_location
 * @property float|null $latitude
 * @property float|null $longitude
 * @property float|null $product_weight
 * @property \Cake\I18n\FrozenTime|null $pickup_date_time
 * @property int|null $job_type_id
 * @property string|null $product_details
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenDate|null $modified
 *
 * @property \App\Model\Entity\JobType $job_type
 */
class Job extends Entity
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
        'pickup_location' => true,
        'latitude' => true,
        'longitude' => true,
        'product_weight' => true,
        'pickup_date_time' => true,
        'job_type_id' => true,
        'product_details' => true,
        'created' => true,
        'modified' => true,
        'job_type' => true,
    ];
}
