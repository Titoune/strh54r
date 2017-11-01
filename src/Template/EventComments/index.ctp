<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventComment[]|\Cake\Collection\CollectionInterface $eventComments
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event Comment'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventComments index large-9 medium-8 columns content">
    <h3><?= __('Event Comments') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventComments as $eventComment): ?>
            <tr>
                <td><?= $this->Number->format($eventComment->id) ?></td>
                <td><?= h($eventComment->created) ?></td>
                <td><?= h($eventComment->modified) ?></td>
                <td><?= $eventComment->has('user') ? $this->Html->link($eventComment->user->id, ['controller' => 'Users', 'action' => 'view', $eventComment->user->id]) : '' ?></td>
                <td><?= $eventComment->has('event') ? $this->Html->link($eventComment->event->name, ['controller' => 'Events', 'action' => 'view', $eventComment->event->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventComment->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventComment->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventComment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventComment->id)]) ?>
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
