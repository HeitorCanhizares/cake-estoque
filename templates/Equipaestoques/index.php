<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Equipaestoque> $equipaestoques
 */
?>
<div class="equipaestoques index content">
    <?= $this->Html->link(__('New Equipaestoque'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Equipaestoques') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('ca') ?></th>
                    <th><?= $this->Paginator->sort('datafab') ?></th>
                    <th><?= $this->Paginator->sort('tipoperiodoval') ?></th>
                    <th><?= $this->Paginator->sort('quantperiodoval') ?></th>
                    <th><?= $this->Paginator->sort('tamanho') ?></th>
                    <th><?= $this->Paginator->sort('quantdisponivel') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('equipamento_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($equipaestoques as $equipaestoque): ?>
                <tr>
                    <td><?= $this->Number->format($equipaestoque->id) ?></td>
                    <td><?= h($equipaestoque->ca) ?></td>
                    <td><?= h($equipaestoque->datafab) ?></td>
                    <td><?= h($equipaestoque->tipoperiodoval) ?></td>
                    <td><?= $this->Number->format($equipaestoque->quantperiodoval) ?></td>
                    <td><?= h($equipaestoque->tamanho) ?></td>
                    <td><?= $this->Number->format($equipaestoque->quantdisponivel) ?></td>
                    <td><?= h($equipaestoque->ativo) ?></td>
                    <td><?= h($equipaestoque->created) ?></td>
                    <td><?= h($equipaestoque->modified) ?></td>
                    <td><?= $equipaestoque->hasValue('equipamento') ? $this->Html->link($equipaestoque->equipamento->descricao, ['controller' => 'Equipamentos', 'action' => 'view', $equipaestoque->equipamento->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $equipaestoque->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipaestoque->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipaestoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipaestoque->id)]) ?>
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