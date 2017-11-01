<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiscussionMessage $discussionMessage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Discussion Message'), ['action' => 'edit', $discussionMessage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Discussion Message'), ['action' => 'delete', $discussionMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $discussionMessage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Discussion Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="discussionMessages view large-9 medium-8 columns content">
    <h3><?= h($discussionMessage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Discussion') ?></th>
            <td><?= $discussionMessage->has('discussion') ? $this->Html->link($discussionMessage->discussion->id, ['controller' => 'Discussions', 'action' => 'view', $discussionMessage->discussion->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $discussionMessage->has('user') ? $this->Html->link($discussionMessage->user->id, ['controller' => 'Users', 'action' => 'view', $discussionMessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($discussionMessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sender Id') ?></th>
            <td><?= $this->Number->format($discussionMessage->sender_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($discussionMessage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($discussionMessage->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receiver Read') ?></th>
            <td><?= h($discussionMessage->receiver_read) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($discussionMessage->content)); ?>
    </div>
</div>
