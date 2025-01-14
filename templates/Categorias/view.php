<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Categoria $categoria
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Categoria'), ['action' => 'edit', $categoria->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Categoria'), ['action' => 'delete', $categoria->id], ['confirm' => __('Are you sure you want to delete # {0}?', $categoria->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Categorias'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Categoria'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="categorias view content">
            <h3><?= h($categoria->descricao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($categoria->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($categoria->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($categoria->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($categoria->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($categoria->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Equipamentos') ?></h4>
                <?php if (!empty($categoria->equipamentos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Categoria Id') ?></th>
                            <th><?= __('Marca Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categoria->equipamentos as $equipamento) : ?>
                        <tr>
                            <td><?= h($equipamento->id) ?></td>
                            <td><?= h($equipamento->descricao) ?></td>
                            <td><?= h($equipamento->ativo) ?></td>
                            <td><?= h($equipamento->created) ?></td>
                            <td><?= h($equipamento->modified) ?></td>
                            <td><?= h($equipamento->categoria_id) ?></td>
                            <td><?= h($equipamento->marca_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Equipamentos', 'action' => 'view', $equipamento->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Equipamentos', 'action' => 'edit', $equipamento->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipamentos', 'action' => 'delete', $equipamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipamento->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Solicitacaos') ?></h4>
                <?php if (!empty($categoria->solicitacaos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Descricao') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Tamanho') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Categoria Id') ?></th>
                            <th><?= __('Colaborador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($categoria->solicitacaos as $solicitacao) : ?>
                        <tr>
                            <td><?= h($solicitacao->id) ?></td>
                            <td><?= h($solicitacao->descricao) ?></td>
                            <td><?= h($solicitacao->quantidade) ?></td>
                            <td><?= h($solicitacao->tamanho) ?></td>
                            <td><?= h($solicitacao->status) ?></td>
                            <td><?= h($solicitacao->ativo) ?></td>
                            <td><?= h($solicitacao->created) ?></td>
                            <td><?= h($solicitacao->modified) ?></td>
                            <td><?= h($solicitacao->categoria_id) ?></td>
                            <td><?= h($solicitacao->colaborador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Solicitacaos', 'action' => 'view', $solicitacao->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Solicitacaos', 'action' => 'edit', $solicitacao->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Solicitacaos', 'action' => 'delete', $solicitacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacao->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>