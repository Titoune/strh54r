<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\RelationType $relationType
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $relationType->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $relationType->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Relation Types'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Relations'), ['controller' => 'Relations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Relation'), ['controller' => 'Relations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="relationTypes form large-9 medium-8 columns content">
    <?= $this->Form->create($relationType) ?>
    <fieldset>
        <legend><?= __('Edit Relation Type') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('inverse_male');
            echo $this->Form->control('inverse_female');
            echo $this->Form->control('position');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
