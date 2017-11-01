<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $user->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Chat Messages'), ['controller' => 'ChatMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Chat Message'), ['controller' => 'ChatMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Discussions'), ['controller' => 'Discussions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Discussion'), ['controller' => 'Discussions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Event Comments'), ['controller' => 'EventComments', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event Comment'), ['controller' => 'EventComments', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Participations'), ['controller' => 'Participations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Participation'), ['controller' => 'Participations', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relations'), ['controller' => 'Relations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relation'), ['controller' => 'Relations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Edit User') ?></legend>
        <?php
            echo $this->Form->control('firstname');
            echo $this->Form->control('lastname');
            echo $this->Form->control('email');
            echo $this->Form->control('password');
            echo $this->Form->control('logged', ['empty' => true]);
            echo $this->Form->control('picture');
            echo $this->Form->control('sex');
            echo $this->Form->control('token');
            echo $this->Form->control('street_number');
            echo $this->Form->control('route');
            echo $this->Form->control('postal_code');
            echo $this->Form->control('locality');
            echo $this->Form->control('country');
            echo $this->Form->control('country_short');
            echo $this->Form->control('lat');
            echo $this->Form->control('lng');
            echo $this->Form->control('cellphone');
            echo $this->Form->control('phone');
            echo $this->Form->control('birth', ['empty' => true]);
            echo $this->Form->control('death', ['empty' => true]);
            echo $this->Form->control('presentation');
            echo $this->Form->control('profession');
            echo $this->Form->control('admin');
            echo $this->Form->control('notification_anniversary');
            echo $this->Form->control('notification_event');
            echo $this->Form->control('notification_poll');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
