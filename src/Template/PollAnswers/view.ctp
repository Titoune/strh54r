<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollAnswer $pollAnswer
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Poll Answer'), ['action' => 'edit', $pollAnswer->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poll Answer'), ['action' => 'delete', $pollAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswer->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['controller' => 'PollProposals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['controller' => 'PollProposals', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pollAnswers view large-9 medium-8 columns content">
    <h3><?= h($pollAnswer->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Poll') ?></th>
            <td><?= $pollAnswer->has('poll') ? $this->Html->link($pollAnswer->poll->id, ['controller' => 'Polls', 'action' => 'view', $pollAnswer->poll->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poll Proposal') ?></th>
            <td><?= $pollAnswer->has('poll_proposal') ? $this->Html->link($pollAnswer->poll_proposal->id, ['controller' => 'PollProposals', 'action' => 'view', $pollAnswer->poll_proposal->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $pollAnswer->has('user') ? $this->Html->link($pollAnswer->user->id, ['controller' => 'Users', 'action' => 'view', $pollAnswer->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pollAnswer->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pollAnswer->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pollAnswer->modified) ?></td>
        </tr>
    </table>
</div>
