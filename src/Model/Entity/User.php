<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\I18n\FrozenDate;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $firstname
 * @property string $lastname
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime $logged
 * @property string $picture
 * @property string $sex
 * @property string $token
 * @property string $street_number
 * @property string $route
 * @property string $postal_code
 * @property string $locality
 * @property string $country
 * @property string $country_short
 * @property float $lat
 * @property float $lng
 * @property string $cellphone
 * @property string $phone
 * @property \Cake\I18n\FrozenDate $birth
 * @property \Cake\I18n\FrozenDate $death
 * @property string $presentation
 * @property string $profession
 * @property int $admin
 * @property int $notification_anniversary
 * @property int $notification_event
 * @property int $notification_poll
 *
 * @property \App\Model\Entity\ChatMessage[] $chat_messages
 * @property \App\Model\Entity\Discussion[] $discussions
 * @property \App\Model\Entity\EventComment[] $event_comments
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\EventParticipation[] $event_participations
 * @property \App\Model\Entity\PollAnswer[] $poll_answers
 * @property \App\Model\Entity\Poll[] $polls
 * @property \App\Model\Entity\Relation[] $relations
 */
class User extends Entity
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
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'password' => true,
        'logged' => true,
        'picture' => true,
        'sex' => true,
        'token' => true,
        'street_number' => true,
        'route' => true,
        'postal_code' => true,
        'locality' => true,
        'country' => true,
        'country_short' => true,
        'lat' => true,
        'lng' => true,
        'cellphone' => true,
        'phone' => true,
        'birth' => true,
        'death' => true,
        'presentation' => true,
        'profession' => true,
        'admin' => true,
        'notification_anniversary' => true,
        'notification_event' => true,
        'notification_poll' => true,
        'branch' => true,
        'chat_messages' => true,
        'discussions' => true,
        'event_comments' => true,
        'events' => true,
        'event_participations' => true,
        'poll_answers' => true,
        'polls' => true,
        'relations' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
        'token'
    ];

    protected $_virtual = ['picture_url', 'fullname', 'age'];

    protected function _getPicture_url()
    {
        if ($this->picture) {
            return IMAGE_RESIZE_URL . urlencode('medias' . DS . 'users' . DS . $this->id . DS . $this->picture);
        } else {

            if ($this->sex == 'f') {
                return IMAGE_RESIZE_URL . urlencode('img' . DS . IMAGE_DEFAULT_USER_WOMAN);
            } else {
                return IMAGE_RESIZE_URL . urlencode('img' . DS . IMAGE_DEFAULT_USER);
            }

        }
    }

    protected function _getFullname()
    {
        if ($this->firstname && $this->lastname) {
            return $this->firstname . ' ' . $this->lastname;
        } else {
            return null;
        }
    }

    protected function _getAge()
    {
        if (!$this->birth) {
            return null;
        }

        return date_diff(date_create($this->birth->format('Y-m-d H:i:s')), date_create('today'))->y;
    }

    protected function _getSexToText()
    {
        if (!$this->sex) {
            return null;
        }


        $array = [
            'm' => 'Homme',
            'f' => 'Femme'
        ];

        return $array[$this->sex];
    }


    protected function _getBirthday()
    {
        if (!$this->birth) {
            return null;
        }

        $today_day = date('m-d');
        $birth_day = $this->birth->format('m-d');
        $year = date('Y');

        if ($birth_day < $today_day) :
            $year++;
        endif;

        return new FrozenDate($year . '-' . $birth_day . ' 00:00:00');
    }

    protected function _setLastname($val)
    {
        return (!empty($val)) ? ucfirst(strip_tags(trim($val))) : null;
    }


    protected function _setFirstname($val)
    {
        return (!empty($val)) ? ucfirst(strip_tags(trim($val))) : null;
    }


    protected function _setEmail($val)
    {
        return (!empty($val)) ? mb_strtolower(strip_tags(trim($val)), 'UTF-8') : null;
    }

    protected function _setEmailNotification($val)
    {
        return (!empty($val)) ? mb_strtolower(strip_tags(trim($val)), 'UTF-8') : null;
    }

    protected function _setPassword($val)
    {
        return !empty($val) ? (new DefaultPasswordHasher())->hash($val) : null;
    }

    protected function _setPhone($val)
    {
        return (!empty($val)) ? strip_tags(trim($val)) : null;
    }

    protected function _setCellphone($val)
    {
        return (!empty($val)) ? strip_tags(trim($val)) : null;
    }


    protected function _setPicture($val)
    {
        return (!empty($val)) ? trim($val) : null;
    }

    protected function _setPresentation($val)
    {
        return (!empty($val)) ? ucfirst(strip_tags(trim($val))) : null;
    }
}
