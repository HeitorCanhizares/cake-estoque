<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Solicitacao> $solicitacaos
 */
?>
<div class="solicitacaos index content">
    <?= $this->Html->link(__('New Solicitacao'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Solicitacaos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('descricao') ?></th>
                    <th><?= $this->Paginator->sort('quantidade') ?></th>
                    <th><?= $this->Paginator->sort('tamanho') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('categoria_id') ?></th>
                    <th><?= $this->Paginator->sort('colaborador_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($solicitacaos as $solicitacao): ?>
                <tr>
                    <td><?= $this->Number->format($solicitacao->id) ?></td>
                    <td><?= h($solicitacao->descricao) ?></td>
                    <td><?= $this->Number->format($solicitacao->quantidade) ?></td>
                    <td><?= h($solicitacao->tamanho) ?></td>
                    <td><?= h($solicitacao->status) ?></td>
                    <td><?= h($solicitacao->ativo) ?></td>
                    <td><?= h($solicitacao->created) ?></td>
                    <td><?= h($solicitacao->modified) ?></td>
                    <td><?= $solicitacao->hasValue('categoria') ? $this->Html->link($solicitacao->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $solicitacao->categoria->id]) : '' ?></td>
                    <td><?= $solicitacao->hasValue('colaborador') ? $this->Html->link($solicitacao->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $solicitacao->colaborador->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $solicitacao->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $solicitacao->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $solicitacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacao->id)]) ?>
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