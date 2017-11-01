<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discussion $discussion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discussion'), ['action' => 'edit', $discussion->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discussion'), ['action' => 'delete', $discussion->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussion->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Discussions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discussion Messages'), ['controller' => 'DiscussionMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion Message'), ['controller' => 'DiscussionMessages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="discussions view large-9 medium-8 columns content">
    <h3><?= h($discussion->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $discussion->has('user') ? $this->Html->link($discussion->user->id, ['controller' => 'Users', 'action' => 'view', $discussion->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discussion->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id1') ?></th>
            <td><?= $this->Number->format($discussion->user_id1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($discussion->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($discussion->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Discussion Messages') ?></h4>
        <?php if (!empty($discussion->discussion_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Receiver Read') ?></th>
                <th scope="col"><?= __('Discussion Id') ?></th>
                <th scope="col"><?= __('Sender Id') ?></th>
                <th scope="col"><?= __('Receiver Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($discussion->discussion_messages as $discussionMessages): ?>
            <tr>
                <td><?= h($discussionMessages->id) ?></td>
                <td><?= h($discussionMessages->created) ?></td>
                <td><?= h($discussionMessages->modified) ?></td>
                <td><?= h($discussionMessages->content) ?></td>
                <td><?= h($discussionMessages->receiver_read) ?></td>
                <td><?= h($discussionMessages->discussion_id) ?></td>
                <td><?= h($discussionMessages->sender_id) ?></td>
                <td><?= h($discussionMessages->receiver_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'DiscussionMessages', 'action' => 'view', $discussionMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'DiscussionMessages', 'action' => 'edit', $discussionMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'DiscussionMessages', 'action' => 'delete', $discussionMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussionMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
