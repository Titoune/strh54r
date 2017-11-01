<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relation[]|\Cake\Collection\CollectionInterface $relations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Relation'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relation Types'), ['controller' => 'RelationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relation Type'), ['controller' => 'RelationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relations index large-9 medium-8 columns content">
    <h3><?= __('Relations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('relation_type_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('distant_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relations as $relation): ?>
            <tr>
                <td><?= $this->Number->format($relation->id) ?></td>
                <td><?= h($relation->created) ?></td>
                <td><?= h($relation->modified) ?></td>
                <td><?= $relation->has('relation_type') ? $this->Html->link($relation->relation_type->name, ['controller' => 'RelationTypes', 'action' => 'view', $relation->relation_type->id]) : '' ?></td>
                <td><?= $this->Number->format($relation->user_id) ?></td>
                <td><?= $relation->has('user') ? $this->Html->link($relation->user->id, ['controller' => 'Users', 'action' => 'view', $relation->user->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $relation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relation->id)]) ?>
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
