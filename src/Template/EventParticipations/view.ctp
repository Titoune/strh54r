<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventParticipation $eventParticipation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event Participation'), ['action' => 'edit', $eventParticipation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event Participation'), ['action' => 'delete', $eventParticipation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventParticipation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Event Participations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Participation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventParticipations view large-9 medium-8 columns content">
    <h3><?= h($eventParticipation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $eventParticipation->has('event') ? $this->Html->link($eventParticipation->event->name, ['controller' => 'Events', 'action' => 'view', $eventParticipation->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $eventParticipation->has('user') ? $this->Html->link($eventParticipation->user->id, ['controller' => 'Users', 'action' => 'view', $eventParticipation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eventParticipation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event Participation Type Id') ?></th>
            <td><?= $this->Number->format($eventParticipation->event_participation_type_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($eventParticipation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($eventParticipation->modified) ?></td>
        </tr>
    </table>
</div>
