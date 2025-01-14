<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Termo> $termos
 */
?>
<div class="termos index content">
    <?= $this->Html->link(__('New Termo'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Termos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('assinado') ?></th>
                    <th><?= $this->Paginator->sort('data') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('colaborador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($termos as $termo): ?>
                <tr>
                    <td><?= $this->Number->format($termo->id) ?></td>
                    <td><?= h($termo->assinado) ?></td>
                    <td><?= h($termo->data) ?></td>
                    <td><?= h($termo->ativo) ?></td>
                    <td><?= h($termo->created) ?></td>
                    <td><?= h($termo->modified) ?></td>
                    <td><?= $termo->hasValue('colaborador') ? $this->Html->link($termo->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $termo->colaborador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $termo->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $termo->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $termo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $termo->id)]) ?>
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