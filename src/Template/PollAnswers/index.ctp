<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollAnswer[]|\Cake\Collection\CollectionInterface $pollAnswers
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Proposals'), ['controller' => 'PollProposals', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['controller' => 'PollProposals', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pollAnswers index large-9 medium-8 columns content">
    <h3><?= __('Poll Answers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poll_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poll_proposal_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pollAnswers as $pollAnswer): ?>
            <tr>
                <td><?= $this->Number->format($pollAnswer->id) ?></td>
                <td><?= h($pollAnswer->created) ?></td>
                <td><?= h($pollAnswer->modified) ?></td>
                <td><?= $pollAnswer->has('poll') ? $this->Html->link($pollAnswer->poll->id, ['controller' => 'Polls', 'action' => 'view', $pollAnswer->poll->id]) : '' ?></td>
                <td><?= $pollAnswer->has('poll_proposal') ? $this->Html->link($pollAnswer->poll_proposal->id, ['controller' => 'PollProposals', 'action' => 'view', $pollAnswer->poll_proposal->id]) : '' ?></td>
                <td><?= $pollAnswer->has('user') ? $this->Html->link($pollAnswer->user->id, ['controller' => 'Users', 'action' => 'view', $pollAnswer->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pollAnswer->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pollAnswer->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pollAnswer->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollAnswer->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
