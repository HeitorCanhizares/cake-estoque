<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventario $inventario
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Inventario'), ['action' => 'edit', $inventario->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Inventario'), ['action' => 'delete', $inventario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Inventarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Inventario'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="inventarios view content">
            <h3><?= h($inventario->transacao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Transacao') ?></th>
                    <td><?= h($inventario->transacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Observacao') ?></th>
                    <td><?= h($inventario->observacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($inventario->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equipaestoque') ?></th>
                    <td><?= $inventario->hasValue('equipaestoque') ? $this->Html->link($inventario->equipaestoque->ca, ['controller' => 'Equipaestoques', 'action' => 'view', $inventario->equipaestoque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colaborador') ?></th>
                    <td><?= $inventario->hasValue('colaborador') ? $this->Html->link($inventario->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $inventario->colaborador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($inventario->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($inventario->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($inventario->data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($inventario->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($inventario->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>