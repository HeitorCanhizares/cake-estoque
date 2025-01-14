<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Ficha> $fichas
 */
?>
<div class="fichas index content">
    <?= $this->Html->link(__('New Ficha'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Fichas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('assinado') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th><?= $this->Paginator->sort('transacao') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('equipaestoque_id') ?></th>
                    <th><?= $this->Paginator->sort('colaborador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fichas as $ficha): ?>
                <tr>
                    <td><?= $this->Number->format($ficha->id) ?></td>
                    <td><?= $this->Number->format($ficha->quantidade) ?></td>
                    <td><?= h($ficha->assinado) ?></td>
                    <td><?= h($ficha->data) ?></td>
                    <td><?= h($ficha->transacao) ?></td>
                    <td><?= h($ficha->ativo) ?></td>
                    <td><?= h($ficha->created) ?></td>
                    <td><?= h($ficha->modified) ?></td>
                    <td><?= $ficha->hasValue('equipaestoque') ? $this->Html->link($ficha->equipaestoque->ca, ['controller' => 'Equipaestoques', 'action' => 'view', $ficha->equipaestoque->id]) : '' ?></td>
                    <td><?= $ficha->hasValue('colaborador') ? $this->Html->link($ficha->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $ficha->colaborador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $ficha->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ficha->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ficha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->id)]) ?>
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