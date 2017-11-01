<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RelationType $relationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Relation Type'), ['action' => 'edit', $relationType->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Relation Type'), ['action' => 'delete', $relationType->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relationType->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Relation Types'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relation Type'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Relations'), ['controller' => 'Relations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relation'), ['controller' => 'Relations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="relationTypes view large-9 medium-8 columns content">
    <h3><?= h($relationType->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($relationType->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inverse Male') ?></th>
            <td><?= h($relationType->inverse_male) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inverse Female') ?></th>
            <td><?= h($relationType->inverse_female) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($relationType->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= $this->Number->format($relationType->position) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Relations') ?></h4>
        <?php if (!empty($relationType->relations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Relation Type Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Distant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($relationType->relations as $relations): ?>
            <tr>
                <td><?= h($relations->id) ?></td>
                <td><?= h($relations->created) ?></td>
                <td><?= h($relations->modified) ?></td>
                <td><?= h($relations->relation_type_id) ?></td>
                <td><?= h($relations->user_id) ?></td>
                <td><?= h($relations->distant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Relations', 'action' => 'view', $relations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Relations', 'action' => 'edit', $relations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Relations', 'action' => 'delete', $relations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
