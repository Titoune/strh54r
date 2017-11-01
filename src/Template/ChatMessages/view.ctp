<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChatMessage $chatMessage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Chat Message'), ['action' => 'edit', $chatMessage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Chat Message'), ['action' => 'delete', $chatMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $chatMessage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Chat Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Chat Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="chatMessages view large-9 medium-8 columns content">
    <h3><?= h($chatMessage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $chatMessage->has('user') ? $this->Html->link($chatMessage->user->id, ['controller' => 'Users', 'action' => 'view', $chatMessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($chatMessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($chatMessage->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($chatMessage->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($chatMessage->content)); ?>
    </div>
</div>
