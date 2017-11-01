<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discussion[]|\Cake\Collection\CollectionInterface $discussions
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discussion Messages'), ['controller' => 'DiscussionMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion Message'), ['controller' => 'DiscussionMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discussions index large-9 medium-8 columns content">
    <h3><?= __('Discussions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id1') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($discussions as $discussion): ?>
            <tr>
                <td><?= $this->Number->format($discussion->id) ?></td>
                <td><?= h($discussion->created) ?></td>
                <td><?= h($discussion->modified) ?></td>
                <td><?= $discussion->has('user') ? $this->Html->link($discussion->user->id, ['controller' => 'Users', 'action' => 'view', $discussion->user->id]) : '' ?></td>
                <td><?= $this->Number->format($discussion->user_id1) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $discussion->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $discussion->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $discussion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id)]) ?>
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
