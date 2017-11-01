<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poll $poll
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Poll'), ['action' => 'edit', $poll->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Poll'), ['action' => 'delete', $poll->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poll->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Polls'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['controller' => 'PollProposals', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['controller' => 'PollProposals', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="polls view large-9 medium-8 columns content">
    <h3><?= h($poll->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Question') ?></th>
            <td><?= h($poll->question) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $poll->has('user') ? $this->Html->link($poll->user->id, ['controller' => 'Users', 'action' => 'view', $poll->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($poll->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poll Proposal Count') ?></th>
            <td><?= $this->Number->format($poll->poll_proposal_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Poll Answer Count') ?></th>
            <td><?= $this->Number->format($poll->poll_answer_count) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($poll->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($poll->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Poll Answers') ?></h4>
        <?php if (!empty($poll->poll_answers)): ?>
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
            <?php foreach ($poll->poll_answers as $pollAnswers): ?>
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
    <div class="related">
        <h4><?= __('Related Poll Proposals') ?></h4>
        <?php if (!empty($poll->poll_proposals)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Content') ?></th>
                <th scope="col"><?= __('Poll Answer Count') ?></th>
                <th scope="col"><?= __('Poll Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($poll->poll_proposals as $pollProposals): ?>
            <tr>
                <td><?= h($pollProposals->id) ?></td>
                <td><?= h($pollProposals->created) ?></td>
                <td><?= h($pollProposals->modified) ?></td>
                <td><?= h($pollProposals->content) ?></td>
                <td><?= h($pollProposals->poll_answer_count) ?></td>
                <td><?= h($pollProposals->poll_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PollProposals', 'action' => 'view', $pollProposals->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PollProposals', 'action' => 'edit', $pollProposals->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PollProposals', 'action' => 'delete', $pollProposals->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollProposals->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
