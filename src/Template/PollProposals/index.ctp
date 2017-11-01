<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PollProposal[]|\Cake\Collection\CollectionInterface $pollProposals
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Poll Proposal'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Polls'), ['controller' => 'Polls', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll'), ['controller' => 'Polls', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Poll Answers'), ['controller' => 'PollAnswers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Poll Answer'), ['controller' => 'PollAnswers', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pollProposals index large-9 medium-8 columns content">
    <h3><?= __('Poll Proposals') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poll_answer_count') ?></th>
                <th scope="col"><?= $this->Paginator->sort('poll_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pollProposals as $pollProposal): ?>
            <tr>
                <td><?= $this->Number->format($pollProposal->id) ?></td>
                <td><?= h($pollProposal->created) ?></td>
                <td><?= h($pollProposal->modified) ?></td>
                <td><?= $this->Number->format($pollProposal->poll_answer_count) ?></td>
                <td><?= $pollProposal->has('poll') ? $this->Html->link($pollProposal->poll->id, ['controller' => 'Polls', 'action' => 'view', $pollProposal->poll->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pollProposal->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pollProposal->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pollProposal->id], ['confirm' => __('Are you sure you want to delete # {0}?', $pollProposal->id)]) ?>
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
