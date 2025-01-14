<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ficha $ficha
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Ficha'), ['action' => 'edit', $ficha->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Ficha'), ['action' => 'delete', $ficha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Fichas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Ficha'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="fichas view content">
            <h3><?= h($ficha->assinado) ?></h3>
            <table>
                <tr>
                    <th><?= __('Assinado') ?></th>
                    <td><?= h($ficha->assinado) ?></td>
                </tr>
                <tr>
                    <th><?= __('Transacao') ?></th>
                    <td><?= h($ficha->transacao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($ficha->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equipaestoque') ?></th>
                    <td><?= $ficha->hasValue('equipaestoque') ? $this->Html->link($ficha->equipaestoque->ca, ['controller' => 'Equipaestoques', 'action' => 'view', $ficha->equipaestoque->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colaborador') ?></th>
                    <td><?= $ficha->hasValue('colaborador') ? $this->Html->link($ficha->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $ficha->colaborador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($ficha->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($ficha->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($ficha->data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($ficha->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($ficha->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>