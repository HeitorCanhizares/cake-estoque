<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entrada $entrada
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Entrada'), ['action' => 'edit', $entrada->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Entrada'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Entradas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Entrada'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="entradas view content">
            <h3><?= h($entrada->ativo) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($entrada->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equipaestoque') ?></th>
                    <td><?= $entrada->hasValue('equipaestoque') ? $this->Html->link($entrada->equipaestoque->ca, ['controller' => 'Equipaestoques', 'action' => 'view', $entrada->equipaestoque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colaborador') ?></th>
                    <td><?= $entrada->hasValue('colaborador') ? $this->Html->link($entrada->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $entrada->colaborador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($entrada->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($entrada->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($entrada->data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($entrada->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($entrada->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>