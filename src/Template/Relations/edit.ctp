<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Relation $relation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Relations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Relation Types'), ['controller' => 'RelationTypes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relation Type'), ['controller' => 'RelationTypes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relations form large-9 medium-8 columns content">
    <?= $this->Form->create($relation) ?>
    <fieldset>
        <legend><?= __('Edit Relation') ?></legend>
        <?php
            echo $this->Form->control('relation_type_id', ['options' => $relationTypes]);
            echo $this->Form->control('user_id');
            echo $this->Form->control('distant_id', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
