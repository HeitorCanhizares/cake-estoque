<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Termo $termo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Termo'), ['action' => 'edit', $termo->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Termo'), ['action' => 'delete', $termo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $termo->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Termos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Termo'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="termos view content">
            <h3><?= h($termo->assinado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Assinado') ?></th>
                    <td><?= h($termo->assinado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($termo->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colaborador') ?></th>
                    <td><?= $termo->hasValue('colaborador') ? $this->Html->link($termo->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $termo->colaborador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($termo->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($termo->data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($termo->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($termo->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>