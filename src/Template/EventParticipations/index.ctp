<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventParticipation[]|\Cake\Collection\CollectionInterface $eventParticipations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event Participation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventParticipations index large-9 medium-8 columns content">
    <h3><?= __('Event Participations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_participation_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventParticipations as $eventParticipation): ?>
            <tr>
                <td><?= $this->Number->format($eventParticipation->id) ?></td>
                <td><?= h($eventParticipation->created) ?></td>
                <td><?= h($eventParticipation->modified) ?></td>
                <td><?= $this->Number->format($eventParticipation->event_participation_type_id) ?></td>
                <td><?= $eventParticipation->has('event') ? $this->Html->link($eventParticipation->event->name, ['controller' => 'Events', 'action' => 'view', $eventParticipation->event->id]) : '' ?></td>
                <td><?= $eventParticipation->has('user') ? $this->Html->link($eventParticipation->user->id, ['controller' => 'Users', 'action' => 'view', $eventParticipation->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventParticipation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventParticipation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventParticipation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventParticipation->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
