<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * DiscussionMessages Model
 *
 * @property \App\Model\Table\DiscussionsTable|\Cake\ORM\Association\BelongsTo $Discussions
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Senders
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Receivers
 *
 * @method \App\Model\Entity\DiscussionMessage get($primaryKey, $options = [])
 * @method \App\Model\Entity\DiscussionMessage newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\DiscussionMessage[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\DiscussionMessage|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\DiscussionMessage patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\DiscussionMessage[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\DiscussionMessage findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiscussionMessagesTable extends Table
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

        $this->setTable('discussion_messages');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Discussions', [
            'foreignKey' => 'discussion_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Senders', [
            'className' => 'Users',
            'foreignKey' => 'sender_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Receivers', [
            'className' => 'Users',
            'foreignKey' => 'receiver_id',
            'joinType' => 'INNER'
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
            ->scalar('content')
            ->allowEmpty('content');

        $validator
            ->dateTime('receiver_read')
            ->allowEmpty('receiver_read');

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
        $rules->add($rules->existsIn(['discussion_id'], 'Discussions'));
        $rules->add($rules->existsIn(['sender_id'], 'Senders'));
        $rules->add($rules->existsIn(['receiver_id'], 'Receivers'));

        return $rules;
    }
}
