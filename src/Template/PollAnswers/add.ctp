<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollAnswer $pollAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['controller' => 'PollProposals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['controller' => 'PollProposals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pollAnswers form large-9 medium-8 columns content">
    <?= $this->Form->create($pollAnswer) ?>
    <fieldset>
        <legend><?= __('Add Poll Answer') ?></legend>
        <?php
            echo $this->Form->control('poll_id', ['options' => $polls]);
            echo $this->Form->control('poll_proposal_id', ['options' => $pollProposals]);
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
