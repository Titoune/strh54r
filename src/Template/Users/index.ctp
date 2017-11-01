<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Chat Messages'), ['controller' => 'ChatMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chat Message'), ['controller' => 'ChatMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Comments'), ['controller' => 'EventComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Comment'), ['controller' => 'EventComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participations'), ['controller' => 'Participations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participation'), ['controller' => 'Participations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relations'), ['controller' => 'Relations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relation'), ['controller' => 'Relations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users index large-9 medium-8 columns content">
    <h3><?= __('Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('firstname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lastname') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('logged') ?></th>
                <th scope="col"><?= $this->Paginator->sort('picture') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sex') ?></th>
                <th scope="col"><?= $this->Paginator->sort('token') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('route') ?></th>
                <th scope="col"><?= $this->Paginator->sort('postal_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('locality') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country_short') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lat') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lng') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cellphone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('death') ?></th>
                <th scope="col"><?= $this->Paginator->sort('profession') ?></th>
                <th scope="col"><?= $this->Paginator->sort('admin') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notification_anniversary') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notification_event') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notification_poll') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->created) ?></td>
                <td><?= h($user->modified) ?></td>
                <td><?= h($user->firstname) ?></td>
                <td><?= h($user->lastname) ?></td>
                <td><?= h($user->email) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->logged) ?></td>
                <td><?= h($user->picture) ?></td>
                <td><?= h($user->sex) ?></td>
                <td><?= h($user->token) ?></td>
                <td><?= h($user->street_number) ?></td>
                <td><?= h($user->route) ?></td>
                <td><?= h($user->postal_code) ?></td>
                <td><?= h($user->locality) ?></td>
                <td><?= h($user->country) ?></td>
                <td><?= h($user->country_short) ?></td>
                <td><?= $this->Number->format($user->lat) ?></td>
                <td><?= $this->Number->format($user->lng) ?></td>
                <td><?= h($user->cellphone) ?></td>
                <td><?= h($user->phone) ?></td>
                <td><?= h($user->birth) ?></td>
                <td><?= h($user->death) ?></td>
                <td><?= h($user->profession) ?></td>
                <td><?= $this->Number->format($user->admin) ?></td>
                <td><?= $this->Number->format($user->notification_anniversary) ?></td>
                <td><?= $this->Number->format($user->notification_event) ?></td>
                <td><?= $this->Number->format($user->notification_poll) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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
