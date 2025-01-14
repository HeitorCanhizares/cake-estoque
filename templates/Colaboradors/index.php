<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Colaborador> $colaboradors
 */
?>
<div class="colaboradors index content">
    <?= $this->Html->link(__('New Colaborador'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Colaboradors') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('dtnascimento') ?></th>
                    <th><?= $this->Paginator->sort('dtadmissao') ?></th>
                    <th><?= $this->Paginator->sort('cpf') ?></th>
                    <th><?= $this->Paginator->sort('rg') ?></th>
                    <th><?= $this->Paginator->sort('celular') ?></th>
                    <th><?= $this->Paginator->sort('sexob') ?></th>
                    <th><?= $this->Paginator->sort('estadocivil') ?></th>
                    <th><?= $this->Paginator->sort('digital') ?></th>
                    <th><?= $this->Paginator->sort('foto') ?></th>
                    <th><?= $this->Paginator->sort('cargo') ?></th>
                    <th><?= $this->Paginator->sort('ativo') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($colaboradors as $colaborador): ?>
                <tr>
                    <td><?= $this->Number->format($colaborador->id) ?></td>
                    <td><?= h($colaborador->nome) ?></td>
                    <td><?= h($colaborador->dtnascimento) ?></td>
                    <td><?= h($colaborador->dtadmissao) ?></td>
                    <td><?= h($colaborador->cpf) ?></td>
                    <td><?= h($colaborador->rg) ?></td>
                    <td><?= h($colaborador->celular) ?></td>
                    <td><?= h($colaborador->sexob) ?></td>
                    <td><?= h($colaborador->estadocivil) ?></td>
                    <td><?= h($colaborador->digital) ?></td>
                    <td><?= h($colaborador->foto) ?></td>
                    <td><?= h($colaborador->cargo) ?></td>
                    <td><?= h($colaborador->ativo) ?></td>
                    <td><?= h($colaborador->created) ?></td>
                    <td><?= h($colaborador->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $colaborador->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $colaborador->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $colaborador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id)]) ?>
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