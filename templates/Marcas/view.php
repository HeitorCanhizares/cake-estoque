<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Marca $marca
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Marca'), ['action' => 'edit', $marca->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Marca'), ['action' => 'delete', $marca->id], ['confirm' => __('Are you sure you want to delete # {0}?', $marca->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Marcas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Marca'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="marcas view content">
            <h3><?= h($marca->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($marca->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($marca->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($marca->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($marca->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($marca->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Equipamentos') ?></h4>
                <?php if (!empty($marca->equipamentos)) : ?>
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
                        <?php foreach ($marca->equipamentos as $equipamento) : ?>
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
        </div>
    </div>
</div>