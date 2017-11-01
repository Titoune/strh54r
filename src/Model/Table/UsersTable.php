<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\ChatMessagesTable|\Cake\ORM\Association\HasMany $ChatMessages
 * @property \App\Model\Table\DiscussionsTable|\Cake\ORM\Association\HasMany $Discussions
 * @property \App\Model\Table\EventCommentsTable|\Cake\ORM\Association\HasMany $EventComments
 * @property \App\Model\Table\EventsTable|\Cake\ORM\Association\HasMany $Events
 * @property \App\Model\Table\EventParticipationsTable|\Cake\ORM\Association\HasMany $Participations
 * @property \App\Model\Table\PollAnswersTable|\Cake\ORM\Association\HasMany $PollAnswers
 * @property \App\Model\Table\PollsTable|\Cake\ORM\Association\HasMany $Polls
 * @property \App\Model\Table\RelationsTable|\Cake\ORM\Association\HasMany $Relations
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('ChatMessages', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Discussions', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EventComments', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Events', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('EventParticipations', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('PollAnswers', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Polls', [
            'foreignKey' => 'user_id'
        ]);
        $this->hasMany('Relations', [
            'foreignKey' => 'user_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('firstname')
            ->allowEmpty('firstname');

        $validator
            ->scalar('lastname')
            ->allowEmpty('lastname');

        $validator
            ->email('email')
            ->allowEmpty('email');

        $validator
            ->scalar('password')
            ->allowEmpty('password');

        $validator
            ->dateTime('logged')
            ->allowEmpty('logged');

        $validator
            ->scalar('picture')
            ->allowEmpty('picture');

        $validator
            ->scalar('sex')
            ->allowEmpty('sex');

        $validator
            ->scalar('token')
            ->allowEmpty('token');

        $validator
            ->scalar('street_number')
            ->allowEmpty('street_number');

        $validator
            ->scalar('route')
            ->allowEmpty('route');

        $validator
            ->scalar('postal_code')
            ->allowEmpty('postal_code');

        $validator
            ->scalar('locality')
            ->allowEmpty('locality');

        $validator
            ->scalar('country')
            ->allowEmpty('country');

        $validator
            ->scalar('country_short')
            ->allowEmpty('country_short');

        $validator
            ->decimal('lat')
            ->allowEmpty('lat');

        $validator
            ->decimal('lng')
            ->allowEmpty('lng');

        $validator
            ->scalar('cellphone')
            ->allowEmpty('cellphone');

        $validator
            ->scalar('phone')
            ->allowEmpty('phone');

        $validator
            ->date('birth')
            ->allowEmpty('birth');

        $validator
            ->date('death')
            ->allowEmpty('death');

        $validator
            ->scalar('presentation')
            ->allowEmpty('presentation');

        $validator
            ->scalar('profession')
            ->allowEmpty('profession');

        $validator
            ->allowEmpty('admin');

        $validator
            ->allowEmpty('notification_anniversary');

        $validator
            ->allowEmpty('notification_event');

        $validator
            ->allowEmpty('notification_poll');

        $validator
            ->allowEmpty('branch');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }
}
