<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollProposal $pollProposal
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Poll Proposal'), ['action' => 'edit', $pollProposal->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poll Proposal'), ['action' => 'delete', $pollProposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollProposal->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pollProposals view large-9 medium-8 columns content">
    <h3><?= h($pollProposal->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Poll') ?></th>
            <td><?= $pollProposal->has('poll') ? $this->Html->link($pollProposal->poll->id, ['controller' => 'Polls', 'action' => 'view', $pollProposal->poll->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($pollProposal->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poll Answer Count') ?></th>
            <td><?= $this->Number->format($pollProposal->poll_answer_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($pollProposal->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($pollProposal->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Content') ?></h4>
        <?= $this->Text->autoParagraph(h($pollProposal->content)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Poll Answers') ?></h4>
        <?php if (!empty($pollProposal->poll_answers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Poll Id') ?></th>
                <th scope="col"><?= __('Poll Proposal Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($pollProposal->poll_answers as $pollAnswers): ?>
            <tr>
                <td><?= h($pollAnswers->id) ?></td>
                <td><?= h($pollAnswers->created) ?></td>
                <td><?= h($pollAnswers->modified) ?></td>
                <td><?= h($pollAnswers->poll_id) ?></td>
                <td><?= h($pollAnswers->poll_proposal_id) ?></td>
                <td><?= h($pollAnswers->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PollAnswers', 'action' => 'view', $pollAnswers->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PollAnswers', 'action' => 'edit', $pollAnswers->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PollAnswers', 'action' => 'delete', $pollAnswers->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswers->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
