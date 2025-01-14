<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipaestoque $equipaestoque
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Equipaestoque'), ['action' => 'edit', $equipaestoque->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Equipaestoque'), ['action' => 'delete', $equipaestoque->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipaestoque->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Equipaestoques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Equipaestoque'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="equipaestoques view content">
            <h3><?= h($equipaestoque->ca) ?></h3>
            <table>
                <tr>
                    <th><?= __('Ca') ?></th>
                    <td><?= h($equipaestoque->ca) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tipoperiodoval') ?></th>
                    <td><?= h($equipaestoque->tipoperiodoval) ?></td>
                </tr>
                <tr>
                    <th><?= __('Tamanho') ?></th>
                    <td><?= h($equipaestoque->tamanho) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($equipaestoque->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Equipamento') ?></th>
                    <td><?= $equipaestoque->hasValue('equipamento') ? $this->Html->link($equipaestoque->equipamento->descricao, ['controller' => 'Equipamentos', 'action' => 'view', $equipaestoque->equipamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($equipaestoque->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantperiodoval') ?></th>
                    <td><?= $this->Number->format($equipaestoque->quantperiodoval) ?></td>
                </tr>
                <tr>
                    <th><?= __('Quantdisponivel') ?></th>
                    <td><?= $this->Number->format($equipaestoque->quantdisponivel) ?></td>
                </tr>
                <tr>
                    <th><?= __('Datafab') ?></th>
                    <td><?= h($equipaestoque->datafab) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($equipaestoque->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($equipaestoque->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Entradas') ?></h4>
                <?php if (!empty($equipaestoque->entradas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Equipaestoque Id') ?></th>
                            <th><?= __('Colaborador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($equipaestoque->entradas as $entrada) : ?>
                        <tr>
                            <td><?= h($entrada->id) ?></td>
                            <td><?= h($entrada->quantidade) ?></td>
                            <td><?= h($entrada->data) ?></td>
                            <td><?= h($entrada->ativo) ?></td>
                            <td><?= h($entrada->created) ?></td>
                            <td><?= h($entrada->modified) ?></td>
                            <td><?= h($entrada->equipaestoque_id) ?></td>
                            <td><?= h($entrada->colaborador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Entradas', 'action' => 'view', $entrada->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Entradas', 'action' => 'edit', $entrada->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Entradas', 'action' => 'delete', $entrada->id], ['confirm' => __('Are you sure you want to delete # {0}?', $entrada->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Fichas') ?></h4>
                <?php if (!empty($equipaestoque->fichas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Assinado') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Transacao') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Equipaestoque Id') ?></th>
                            <th><?= __('Colaborador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($equipaestoque->fichas as $ficha) : ?>
                        <tr>
                            <td><?= h($ficha->id) ?></td>
                            <td><?= h($ficha->quantidade) ?></td>
                            <td><?= h($ficha->assinado) ?></td>
                            <td><?= h($ficha->data) ?></td>
                            <td><?= h($ficha->transacao) ?></td>
                            <td><?= h($ficha->ativo) ?></td>
                            <td><?= h($ficha->created) ?></td>
                            <td><?= h($ficha->modified) ?></td>
                            <td><?= h($ficha->equipaestoque_id) ?></td>
                            <td><?= h($ficha->colaborador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Fichas', 'action' => 'view', $ficha->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Fichas', 'action' => 'edit', $ficha->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fichas', 'action' => 'delete', $ficha->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Inventarios') ?></h4>
                <?php if (!empty($equipaestoque->inventarios)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Quantidade') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Transacao') ?></th>
                            <th><?= __('Observacao') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Equipaestoque Id') ?></th>
                            <th><?= __('Colaborador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($equipaestoque->inventarios as $inventario) : ?>
                        <tr>
                            <td><?= h($inventario->id) ?></td>
                            <td><?= h($inventario->quantidade) ?></td>
                            <td><?= h($inventario->data) ?></td>
                            <td><?= h($inventario->transacao) ?></td>
                            <td><?= h($inventario->observacao) ?></td>
                            <td><?= h($inventario->ativo) ?></td>
                            <td><?= h($inventario->created) ?></td>
                            <td><?= h($inventario->modified) ?></td>
                            <td><?= h($inventario->equipaestoque_id) ?></td>
                            <td><?= h($inventario->colaborador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Inventarios', 'action' => 'view', $inventario->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Inventarios', 'action' => 'edit', $inventario->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Inventarios', 'action' => 'delete', $inventario->id], ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id)]) ?>
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