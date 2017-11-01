<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * DiscussionMessage Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $content
 * @property \Cake\I18n\FrozenTime $receiver_read
 * @property int $discussion_id
 * @property int $sender_id
 * @property int $receiver_id
 *
 * @property \App\Model\Entity\Discussion $discussion
 * @property \App\Model\Entity\User $user
 */
class DiscussionMessage extends Entity
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
        'content' => true,
        'receiver_read' => true,
        'discussion_id' => true,
        'sender_id' => true,
        'receiver_id' => true,
        'discussion' => true,
        'user' => true
    ];
}
