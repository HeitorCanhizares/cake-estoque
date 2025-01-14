<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitacao $solicitacao
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Solicitacao'), ['action' => 'edit', $solicitacao->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Solicitacao'), ['action' => 'delete', $solicitacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacao->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Solicitacaos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Solicitacao'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="solicitacaos view content">
            <h3><?= h($solicitacao->descricao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($solicitacao->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tamanho') ?></th>
                    <td><?= h($solicitacao->tamanho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($solicitacao->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($solicitacao->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $solicitacao->hasValue('categoria') ? $this->Html->link($solicitacao->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $solicitacao->categoria->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Colaborador') ?></th>
                    <td><?= $solicitacao->hasValue('colaborador') ? $this->Html->link($solicitacao->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $solicitacao->colaborador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($solicitacao->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantidade') ?></th>
                    <td><?= $this->Number->format($solicitacao->quantidade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($solicitacao->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($solicitacao->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>