<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventComment $eventComment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $eventComment->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $eventComment->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Event Comments'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventComments form large-9 medium-8 columns content">
    <?= $this->Form->create($eventComment) ?>
    <fieldset>
        <legend><?= __('Edit Event Comment') ?></legend>
        <?php
            echo $this->Form->control('content');
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('event_id', ['options' => $events]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
