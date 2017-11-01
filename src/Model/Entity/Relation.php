<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Relation Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $relation_type_id
 * @property int $user_id
 * @property int $distant_id
 *
 * @property \App\Model\Entity\RelationType $relation_type
 * @property \App\Model\Entity\User $user
 */
class Relation extends Entity
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
        'created' => true,
        'modified' => true,
        'relation_type_id' => true,
        'user_id' => true,
        'distant_id' => true,
        'relation_type' => true,
        'user' => true
    ];
}
