<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventComment $eventComment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Event Comment'), ['action' => 'edit', $eventComment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Event Comment'), ['action' => 'delete', $eventComment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventComment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Event Comments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event Comment'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventComments view large-9 medium-8 columns content">
    <h3><?= h($eventComment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $eventComment->has('user') ? $this->Html->link($eventComment->user->id, ['controller' => 'Users', 'action' => 'view', $eventComment->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $eventComment->has('event') ? $this->Html->link($eventComment->event->name, ['controller' => 'Events', 'action' => 'view', $eventComment->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eventComment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($eventComment->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($eventComment->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($eventComment->content)); ?>
    </div>
</div>
