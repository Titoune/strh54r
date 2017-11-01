<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * RelationType Entity
 *
 * @property int $id
 * @property string $name
 * @property string $inverse_male
 * @property string $inverse_female
 * @property int $position
 *
 * @property \App\Model\Entity\Relation[] $relations
 */
class RelationType extends Entity
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
        'inverse_male' => true,
        'inverse_female' => true,
        'position' => true,
        'relations' => true
    ];
}
