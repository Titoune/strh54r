<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Discussion $discussion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discussion Messages'), ['controller' => 'DiscussionMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion Message'), ['controller' => 'DiscussionMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="discussions form large-9 medium-8 columns content">
    <?= $this->Form->create($discussion) ?>
    <fieldset>
        <legend><?= __('Add Discussion') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('user_id1');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
