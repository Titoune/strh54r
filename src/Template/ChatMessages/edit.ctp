<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ChatMessage $chatMessage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $chatMessage->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $chatMessage->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Chat Messages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="chatMessages form large-9 medium-8 columns content">
    <?= $this->Form->create($chatMessage) ?>
    <fieldset>
        <legend><?= __('Edit Chat Message') ?></legend>
        <?php
            echo $this->Form->control('content');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
