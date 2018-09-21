<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Tabela'), ['action' => 'edit', $tabela->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Tabela'), ['action' => 'delete', $tabela->id], ['confirm' => __('Are you sure you want to delete # {0}?', $tabela->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Tabela'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tabela'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Dentro'), ['controller' => 'Dentro', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dentro'), ['controller' => 'Dentro', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="tabela view large-9 medium-8 columns content">
    <h3><?= h($tabela->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($tabela->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($tabela->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Dentro') ?></h4>
        <?php if (!empty($tabela->dentro)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome') ?></th>
                <th scope="col"><?= __('Tabela Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($tabela->dentro as $dentro): ?>
            <tr>
                <td><?= h($dentro->id) ?></td>
                <td><?= h($dentro->nome) ?></td>
                <td><?= h($dentro->tabela_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Dentro', 'action' => 'view', $dentro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Dentro', 'action' => 'edit', $dentro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Dentro', 'action' => 'delete', $dentro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $dentro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
