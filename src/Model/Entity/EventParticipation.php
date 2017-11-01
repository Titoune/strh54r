<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * EventParticipation Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $event_participation_type_id
 * @property int $event_id
 * @property int $user_id
 *
 * @property \App\Model\Entity\EventParticipationType $event_participation_type
 * @property \App\Model\Entity\Event $event
 * @property \App\Model\Entity\User $user
 */
class EventParticipation extends Entity
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
        'event_participation_type_id' => true,
        'event_id' => true,
        'user_id' => true,
        'event_participation_type' => true,
        'event' => true,
        'user' => true
    ];
}
