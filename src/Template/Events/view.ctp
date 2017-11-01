<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event'), ['action' => 'edit', $event->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Event Comments'), ['controller' => 'EventComments', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Comment'), ['controller' => 'EventComments', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Participations'), ['controller' => 'Participations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Participation'), ['controller' => 'Participations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="events view large-9 medium-8 columns content">
    <h3><?= h($event->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($event->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone') ?></th>
            <td><?= h($event->phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street Number') ?></th>
            <td><?= h($event->street_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Route') ?></th>
            <td><?= h($event->route) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Postal Code') ?></th>
            <td><?= h($event->postal_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Locality') ?></th>
            <td><?= h($event->locality) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($event->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country Short') ?></th>
            <td><?= h($event->country_short) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($event->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($event->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lat') ?></th>
            <td><?= $this->Number->format($event->lat) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lng') ?></th>
            <td><?= $this->Number->format($event->lng) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Comment Count') ?></th>
            <td><?= $this->Number->format($event->event_comment_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($event->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($event->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start') ?></th>
            <td><?= h($event->start) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End') ?></th>
            <td><?= h($event->end) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($event->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Event Comments') ?></h4>
        <?php if (!empty($event->event_comments)): ?>
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
            <?php foreach ($event->event_comments as $eventComments): ?>
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
        <h4><?= __('Related Participations') ?></h4>
        <?php if (!empty($event->participations)): ?>
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
            <?php foreach ($event->participations as $participations): ?>
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
</div>
