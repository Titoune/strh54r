<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Event Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $name
 * @property \Cake\I18n\FrozenTime $start
 * @property \Cake\I18n\FrozenTime $end
 * @property float $price
 * @property string $content
 * @property string $phone
 * @property string $street_number
 * @property string $route
 * @property string $postal_code
 * @property string $locality
 * @property string $country
 * @property string $country_short
 * @property float $lat
 * @property float $lng
 * @property int $event_comment_count
 * @property int $user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\EventComment[] $event_comments
 * @property \App\Model\Entity\EventParticipation[] $participations
 */
class Event extends Entity
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
        'name' => true,
        'start' => true,
        'end' => true,
        'price' => true,
        'content' => true,
        'phone' => true,
        'street_number' => true,
        'route' => true,
        'postal_code' => true,
        'locality' => true,
        'country' => true,
        'country_short' => true,
        'lat' => true,
        'lng' => true,
        'event_comment_count' => true,
        'event_participation_count' => true,

        'user_id' => true,
        'user' => true,
        'event_comments' => true,
        'event_participations' => true
    ];
}
