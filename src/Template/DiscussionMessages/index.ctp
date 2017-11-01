<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiscussionMessage[]|\Cake\Collection\CollectionInterface $discussionMessages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Discussion Message'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discussionMessages index large-9 medium-8 columns content">
    <h3><?= __('Discussion Messages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver_read') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discussion_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sender_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discussionMessages as $discussionMessage): ?>
            <tr>
                <td><?= $this->Number->format($discussionMessage->id) ?></td>
                <td><?= h($discussionMessage->created) ?></td>
                <td><?= h($discussionMessage->modified) ?></td>
                <td><?= h($discussionMessage->receiver_read) ?></td>
                <td><?= $discussionMessage->has('discussion') ? $this->Html->link($discussionMessage->discussion->id, ['controller' => 'Discussions', 'action' => 'view', $discussionMessage->discussion->id]) : '' ?></td>
                <td><?= $this->Number->format($discussionMessage->sender_id) ?></td>
                <td><?= $discussionMessage->has('user') ? $this->Html->link($discussionMessage->user->id, ['controller' => 'Users', 'action' => 'view', $discussionMessage->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $discussionMessage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discussionMessage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discussionMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussionMessage->id)]) ?>
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
