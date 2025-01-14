<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Inventario> $inventarios
 */
?>
<div class="inventarios index content">
    <?= $this->Html->link(__('New Inventario'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Inventarios') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th><?= $this->Paginator->sort('transacao') ?></th>
                    <th><?= $this->Paginator->sort('observacao') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('equipaestoque_id') ?></th>
                    <th><?= $this->Paginator->sort('colaborador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($inventarios as $inventario): ?>
                <tr>
                    <td><?= $this->Number->format($inventario->id) ?></td>
                    <td><?= $this->Number->format($inventario->quantidade) ?></td>
                    <td><?= h($inventario->data) ?></td>
                    <td><?= h($inventario->transacao) ?></td>
                    <td><?= h($inventario->observacao) ?></td>
                    <td><?= h($inventario->ativo) ?></td>
                    <td><?= h($inventario->created) ?></td>
                    <td><?= h($inventario->modified) ?></td>
                    <td><?= $inventario->hasValue('equipaestoque') ? $this->Html->link($inventario->equipaestoque->ca, ['controller' => 'Equipaestoques', 'action' => 'view', $inventario->equipaestoque->id]) : '' ?></td>
                    <td><?= $inventario->hasValue('colaborador') ? $this->Html->link($inventario->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $inventario->colaborador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $inventario->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $inventario->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $inventario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>