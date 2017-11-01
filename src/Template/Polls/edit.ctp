<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poll $poll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $poll->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $poll->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['controller' => 'PollProposals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['controller' => 'PollProposals', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="polls form large-9 medium-8 columns content">
    <?= $this->Form->create($poll) ?>
    <fieldset>
        <legend><?= __('Edit Poll') ?></legend>
        <?php
            echo $this->Form->control('question');
            echo $this->Form->control('poll_proposal_count');
            echo $this->Form->control('poll_answer_count');
            echo $this->Form->control('user_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
