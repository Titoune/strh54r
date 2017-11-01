<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChatMessage[]|\Cake\Collection\CollectionInterface $chatMessages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Chat Message'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chatMessages index large-9 medium-8 columns content">
    <h3><?= __('Chat Messages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($chatMessages as $chatMessage): ?>
            <tr>
                <td><?= $this->Number->format($chatMessage->id) ?></td>
                <td><?= h($chatMessage->created) ?></td>
                <td><?= h($chatMessage->modified) ?></td>
                <td><?= $chatMessage->has('user') ? $this->Html->link($chatMessage->user->id, ['controller' => 'Users', 'action' => 'view', $chatMessage->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $chatMessage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $chatMessage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $chatMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatMessage->id)]) ?>
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
