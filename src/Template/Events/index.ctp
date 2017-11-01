<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Event'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Comments'), ['controller' => 'EventComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Comment'), ['controller' => 'EventComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participations'), ['controller' => 'Participations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participation'), ['controller' => 'Participations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events index large-9 medium-8 columns content">
    <h3><?= __('Events') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start') ?></th>
                <th scope="col"><?= $this->Paginator->sort('end') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('route') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postal_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_short') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lng') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_comment_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
            <tr>
                <td><?= $this->Number->format($event->id) ?></td>
                <td><?= h($event->created) ?></td>
                <td><?= h($event->modified) ?></td>
                <td><?= h($event->name) ?></td>
                <td><?= h($event->start) ?></td>
                <td><?= h($event->end) ?></td>
                <td><?= $this->Number->format($event->price) ?></td>
                <td><?= h($event->phone) ?></td>
                <td><?= h($event->street_number) ?></td>
                <td><?= h($event->route) ?></td>
                <td><?= h($event->postal_code) ?></td>
                <td><?= h($event->locality) ?></td>
                <td><?= h($event->country) ?></td>
                <td><?= h($event->country_short) ?></td>
                <td><?= $this->Number->format($event->lat) ?></td>
                <td><?= $this->Number->format($event->lng) ?></td>
                <td><?= $this->Number->format($event->event_comment_count) ?></td>
                <td><?= $event->has('user') ? $this->Html->link($event->user->id, ['controller' => 'Users', 'action' => 'view', $event->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $event->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]) ?>
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
