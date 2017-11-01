<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Chat Messages'), ['controller' => 'ChatMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chat Message'), ['controller' => 'ChatMessages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Comments'), ['controller' => 'EventComments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Comment'), ['controller' => 'EventComments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participations'), ['controller' => 'Participations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participation'), ['controller' => 'Participations', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Relations'), ['controller' => 'Relations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relation'), ['controller' => 'Relations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Firstname') ?></th>
            <td><?= h($user->firstname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lastname') ?></th>
            <td><?= h($user->lastname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($user->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Picture') ?></th>
            <td><?= h($user->picture) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sex') ?></th>
            <td><?= h($user->sex) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Token') ?></th>
            <td><?= h($user->token) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Number') ?></th>
            <td><?= h($user->street_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Route') ?></th>
            <td><?= h($user->route) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($user->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locality') ?></th>
            <td><?= h($user->locality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($user->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Short') ?></th>
            <td><?= h($user->country_short) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cellphone') ?></th>
            <td><?= h($user->cellphone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($user->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Profession') ?></th>
            <td><?= h($user->profession) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lat') ?></th>
            <td><?= $this->Number->format($user->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lng') ?></th>
            <td><?= $this->Number->format($user->lng) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Admin') ?></th>
            <td><?= $this->Number->format($user->admin) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notification Anniversary') ?></th>
            <td><?= $this->Number->format($user->notification_anniversary) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notification Event') ?></th>
            <td><?= $this->Number->format($user->notification_event) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notification Poll') ?></th>
            <td><?= $this->Number->format($user->notification_poll) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Logged') ?></th>
            <td><?= h($user->logged) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth') ?></th>
            <td><?= h($user->birth) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Death') ?></th>
            <td><?= h($user->death) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Presentation') ?></h4>
        <?= $this->Text->autoParagraph(h($user->presentation)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Chat Messages') ?></h4>
        <?php if (!empty($user->chat_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->chat_messages as $chatMessages): ?>
            <tr>
                <td><?= h($chatMessages->id) ?></td>
                <td><?= h($chatMessages->created) ?></td>
                <td><?= h($chatMessages->modified) ?></td>
                <td><?= h($chatMessages->content) ?></td>
                <td><?= h($chatMessages->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'ChatMessages', 'action' => 'view', $chatMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'ChatMessages', 'action' => 'edit', $chatMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'ChatMessages', 'action' => 'delete', $chatMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Discussions') ?></h4>
        <?php if (!empty($user->discussions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('User Id1') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->discussions as $discussions): ?>
            <tr>
                <td><?= h($discussions->id) ?></td>
                <td><?= h($discussions->created) ?></td>
                <td><?= h($discussions->modified) ?></td>
                <td><?= h($discussions->user_id) ?></td>
                <td><?= h($discussions->user_id1) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Discussions', 'action' => 'view', $discussions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Discussions', 'action' => 'edit', $discussions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Discussions', 'action' => 'delete', $discussions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Event Comments') ?></h4>
        <?php if (!empty($user->event_comments)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->event_comments as $eventComments): ?>
            <tr>
                <td><?= h($eventComments->id) ?></td>
                <td><?= h($eventComments->created) ?></td>
                <td><?= h($eventComments->modified) ?></td>
                <td><?= h($eventComments->content) ?></td>
                <td><?= h($eventComments->user_id) ?></td>
                <td><?= h($eventComments->event_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'EventComments', 'action' => 'view', $eventComments->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'EventComments', 'action' => 'edit', $eventComments->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'EventComments', 'action' => 'delete', $eventComments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventComments->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Events') ?></h4>
        <?php if (!empty($user->events)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Start') ?></th>
                <th scope="col"><?= __('End') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Phone') ?></th>
                <th scope="col"><?= __('Street Number') ?></th>
                <th scope="col"><?= __('Route') ?></th>
                <th scope="col"><?= __('Postal Code') ?></th>
                <th scope="col"><?= __('Locality') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col"><?= __('Country Short') ?></th>
                <th scope="col"><?= __('Lat') ?></th>
                <th scope="col"><?= __('Lng') ?></th>
                <th scope="col"><?= __('Event Comment Count') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->events as $events): ?>
            <tr>
                <td><?= h($events->id) ?></td>
                <td><?= h($events->created) ?></td>
                <td><?= h($events->modified) ?></td>
                <td><?= h($events->name) ?></td>
                <td><?= h($events->start) ?></td>
                <td><?= h($events->end) ?></td>
                <td><?= h($events->price) ?></td>
                <td><?= h($events->content) ?></td>
                <td><?= h($events->phone) ?></td>
                <td><?= h($events->street_number) ?></td>
                <td><?= h($events->route) ?></td>
                <td><?= h($events->postal_code) ?></td>
                <td><?= h($events->locality) ?></td>
                <td><?= h($events->country) ?></td>
                <td><?= h($events->country_short) ?></td>
                <td><?= h($events->lat) ?></td>
                <td><?= h($events->lng) ?></td>
                <td><?= h($events->event_comment_count) ?></td>
                <td><?= h($events->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Participations') ?></h4>
        <?php if (!empty($user->participations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Participation Type Id') ?></th>
                <th scope="col"><?= __('Event Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->participations as $participations): ?>
            <tr>
                <td><?= h($participations->id) ?></td>
                <td><?= h($participations->created) ?></td>
                <td><?= h($participations->modified) ?></td>
                <td><?= h($participations->participation_type_id) ?></td>
                <td><?= h($participations->event_id) ?></td>
                <td><?= h($participations->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Participations', 'action' => 'view', $participations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Participations', 'action' => 'edit', $participations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Participations', 'action' => 'delete', $participations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $participations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Poll Answers') ?></h4>
        <?php if (!empty($user->poll_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Poll Id') ?></th>
                <th scope="col"><?= __('Poll Proposal Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->poll_answers as $pollAnswers): ?>
            <tr>
                <td><?= h($pollAnswers->id) ?></td>
                <td><?= h($pollAnswers->created) ?></td>
                <td><?= h($pollAnswers->modified) ?></td>
                <td><?= h($pollAnswers->poll_id) ?></td>
                <td><?= h($pollAnswers->poll_proposal_id) ?></td>
                <td><?= h($pollAnswers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PollAnswers', 'action' => 'view', $pollAnswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PollAnswers', 'action' => 'edit', $pollAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PollAnswers', 'action' => 'delete', $pollAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Polls') ?></h4>
        <?php if (!empty($user->polls)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Question') ?></th>
                <th scope="col"><?= __('Poll Proposal Count') ?></th>
                <th scope="col"><?= __('Poll Answer Count') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->polls as $polls): ?>
            <tr>
                <td><?= h($polls->id) ?></td>
                <td><?= h($polls->created) ?></td>
                <td><?= h($polls->modified) ?></td>
                <td><?= h($polls->question) ?></td>
                <td><?= h($polls->poll_proposal_count) ?></td>
                <td><?= h($polls->poll_answer_count) ?></td>
                <td><?= h($polls->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Polls', 'action' => 'view', $polls->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Polls', 'action' => 'edit', $polls->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Polls', 'action' => 'delete', $polls->id], ['confirm' => __('Are you sure you want to delete # {0}?', $polls->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Relations') ?></h4>
        <?php if (!empty($user->relations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Relation Type Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Distant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->relations as $relations): ?>
            <tr>
                <td><?= h($relations->id) ?></td>
                <td><?= h($relations->created) ?></td>
                <td><?= h($relations->modified) ?></td>
                <td><?= h($relations->relation_type_id) ?></td>
                <td><?= h($relations->user_id) ?></td>
                <td><?= h($relations->distant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Relations', 'action' => 'view', $relations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Relations', 'action' => 'edit', $relations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Relations', 'action' => 'delete', $relations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
