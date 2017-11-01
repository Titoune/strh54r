<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollProposal $pollProposal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $pollProposal->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $pollProposal->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pollProposals form large-9 medium-8 columns content">
    <?= $this->Form->create($pollProposal) ?>
    <fieldset>
        <legend><?= __('Edit Poll Proposal') ?></legend>
        <?php
            echo $this->Form->control('content');
            echo $this->Form->control('poll_answer_count');
            echo $this->Form->control('poll_id', ['options' => $polls]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
