<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event $event
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $event->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $event->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Comments'), ['controller' => 'EventComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Comment'), ['controller' => 'EventComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participations'), ['controller' => 'Participations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participation'), ['controller' => 'Participations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="events form large-9 medium-8 columns content">
    <?= $this->Form->create($event) ?>
    <fieldset>
        <legend><?= __('Edit Event') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('start', ['empty' => true]);
            echo $this->Form->control('end', ['empty' => true]);
            echo $this->Form->control('price');
            echo $this->Form->control('content');
            echo $this->Form->control('phone');
            echo $this->Form->control('street_number');
            echo $this->Form->control('route');
            echo $this->Form->control('postal_code');
            echo $this->Form->control('locality');
            echo $this->Form->control('country');
            echo $this->Form->control('country_short');
            echo $this->Form->control('lat');
            echo $this->Form->control('lng');
            echo $this->Form->control('event_comment_count');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
