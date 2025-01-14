<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Entrada> $entradas
 */
?>
<div class="entradas index content">
    <?= $this->Html->link(__('New Entrada'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Entradas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('equipaestoque_id') ?></th>
                    <th><?= $this->Paginator->sort('colaborador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($entradas as $entrada): ?>
                <tr>
                    <td><?= $this->Number->format($entrada->id) ?></td>
                    <td><?= $this->Number->format($entrada->quantidade) ?></td>
                    <td><?= h($entrada->data) ?></td>
                    <td><?= h($entrada->ativo) ?></td>
                    <td><?= h($entrada->created) ?></td>
                    <td><?= h($entrada->modified) ?></td>
                    <td><?= $entrada->hasValue('equipaestoque') ? $this->Html->link($entrada->equipaestoque->ca, ['controller' => 'Equipaestoques', 'action' => 'view', $entrada->equipaestoque->id]) : '' ?></td>
                    <td><?= $entrada->hasValue('colaborador') ? $this->Html->link($entrada->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $entrada->colaborador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $entrada->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entrada->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?>
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