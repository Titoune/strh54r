<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\DiscussionMessage $discussionMessage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Discussion Messages'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discussionMessages form large-9 medium-8 columns content">
    <?= $this->Form->create($discussionMessage) ?>
    <fieldset>
        <legend><?= __('Add Discussion Message') ?></legend>
        <?php
            echo $this->Form->control('content');
            echo $this->Form->control('receiver_read', ['empty' => true]);
            echo $this->Form->control('discussion_id', ['options' => $discussions]);
            echo $this->Form->control('sender_id');
            echo $this->Form->control('receiver_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
