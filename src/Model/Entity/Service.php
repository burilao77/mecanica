<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property float $total_cost
 * @property \Cake\I18n\FrozenTime $star_date
 * @property \Cake\I18n\FrozenTime $end_date
 * @property bool $state
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $vehicle_id
 * @property int $category_id
 *
 * @property \App\Model\Entity\Vehicle $vehicle
 * @property \App\Model\Entity\Category $category
 */
class Service extends Entity
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
        '*' => true,
        'id' => false
    ];
}
