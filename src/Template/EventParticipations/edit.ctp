<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventParticipation $eventParticipation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $eventParticipation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $eventParticipation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Event Participations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventParticipations form large-9 medium-8 columns content">
    <?= $this->Form->create($eventParticipation) ?>
    <fieldset>
        <legend><?= __('Edit Event Participation') ?></legend>
        <?php
            echo $this->Form->control('event_participation_type_id');
            echo $this->Form->control('event_id', ['options' => $events]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
