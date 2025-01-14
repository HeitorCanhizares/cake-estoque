<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipamento $equipamento
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Equipamento'), ['action' => 'edit', $equipamento->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Equipamento'), ['action' => 'delete', $equipamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipamento->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Equipamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Equipamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="equipamentos view content">
            <h3><?= h($equipamento->descricao) ?></h3>
            <table>
                <tr>
                    <th><?= __('Descricao') ?></th>
                    <td><?= h($equipamento->descricao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($equipamento->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Categoria') ?></th>
                    <td><?= $equipamento->hasValue('categoria') ? $this->Html->link($equipamento->categoria->descricao, ['controller' => 'Categorias', 'action' => 'view', $equipamento->categoria->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Marca') ?></th>
                    <td><?= $equipamento->hasValue('marca') ? $this->Html->link($equipamento->marca->nome, ['controller' => 'Marcas', 'action' => 'view', $equipamento->marca->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($equipamento->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($equipamento->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($equipamento->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Equipaestoques') ?></h4>
                <?php if (!empty($equipamento->equipaestoques)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Ca') ?></th>
                            <th><?= __('Datafab') ?></th>
                            <th><?= __('Tipoperiodoval') ?></th>
                            <th><?= __('Quantperiodoval') ?></th>
                            <th><?= __('Tamanho') ?></th>
                            <th><?= __('Quantdisponivel') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Equipamento Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($equipamento->equipaestoques as $equipaestoque) : ?>
                        <tr>
                            <td><?= h($equipaestoque->id) ?></td>
                            <td><?= h($equipaestoque->ca) ?></td>
                            <td><?= h($equipaestoque->datafab) ?></td>
                            <td><?= h($equipaestoque->tipoperiodoval) ?></td>
                            <td><?= h($equipaestoque->quantperiodoval) ?></td>
                            <td><?= h($equipaestoque->tamanho) ?></td>
                            <td><?= h($equipaestoque->quantdisponivel) ?></td>
                            <td><?= h($equipaestoque->ativo) ?></td>
                            <td><?= h($equipaestoque->created) ?></td>
                            <td><?= h($equipaestoque->modified) ?></td>
                            <td><?= h($equipaestoque->equipamento_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Equipaestoques', 'action' => 'view', $equipaestoque->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Equipaestoques', 'action' => 'edit', $equipaestoque->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Equipaestoques', 'action' => 'delete', $equipaestoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipaestoque->id)]) ?>
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