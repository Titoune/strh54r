<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RelationType[]|\Cake\Collection\CollectionInterface $relationTypes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Relation Type'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Relations'), ['controller' => 'Relations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relation'), ['controller' => 'Relations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relationTypes index large-9 medium-8 columns content">
    <h3><?= __('Relation Types') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inverse_male') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inverse_female') ?></th>
                <th scope="col"><?= $this->Paginator->sort('position') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($relationTypes as $relationType): ?>
            <tr>
                <td><?= $this->Number->format($relationType->id) ?></td>
                <td><?= h($relationType->name) ?></td>
                <td><?= h($relationType->inverse_male) ?></td>
                <td><?= h($relationType->inverse_female) ?></td>
                <td><?= $this->Number->format($relationType->position) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $relationType->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $relationType->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $relationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relationType->id)]) ?>
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
