<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relation $relation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Relation'), ['action' => 'edit', $relation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Relation'), ['action' => 'delete', $relation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $relation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Relations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relation'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Relation Types'), ['controller' => 'RelationTypes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Relation Type'), ['controller' => 'RelationTypes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="relations view large-9 medium-8 columns content">
    <h3><?= h($relation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Relation Type') ?></th>
            <td><?= $relation->has('relation_type') ? $this->Html->link($relation->relation_type->name, ['controller' => 'RelationTypes', 'action' => 'view', $relation->relation_type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $relation->has('user') ? $this->Html->link($relation->user->id, ['controller' => 'Users', 'action' => 'view', $relation->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($relation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User Id') ?></th>
            <td><?= $this->Number->format($relation->user_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($relation->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($relation->modified) ?></td>
        </tr>
    </table>
</div>
