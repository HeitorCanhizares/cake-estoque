<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Colaborador $colaborador
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Colaborador'), ['action' => 'edit', $colaborador->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Colaborador'), ['action' => 'delete', $colaborador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Colaboradors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Colaborador'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colaboradors view content">
            <h3><?= h($colaborador->nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($colaborador->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpf') ?></th>
                    <td><?= h($colaborador->cpf) ?></td>
                </tr>
                <tr>
                    <th><?= __('Rg') ?></th>
                    <td><?= h($colaborador->rg) ?></td>
                </tr>
                <tr>
                    <th><?= __('Celular') ?></th>
                    <td><?= h($colaborador->celular) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexob') ?></th>
                    <td><?= h($colaborador->sexob) ?></td>
                </tr>
                <tr>
                    <th><?= __('Estadocivil') ?></th>
                    <td><?= h($colaborador->estadocivil) ?></td>
                </tr>
                <tr>
                    <th><?= __('Digital') ?></th>
                    <td><?= h($colaborador->digital) ?></td>
                </tr>
                <tr>
                    <th><?= __('Foto') ?></th>
                    <td><?= h($colaborador->foto) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cargo') ?></th>
                    <td><?= h($colaborador->cargo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($colaborador->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($colaborador->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dtnascimento') ?></th>
                    <td><?= h($colaborador->dtnascimento) ?></td>
                </tr>
                <tr>
                    <th><?= __('Dtadmissao') ?></th>
                    <td><?= h($colaborador->dtadmissao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($colaborador->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($colaborador->modified) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Entradas') ?></h4>
                <?php if (!empty($colaborador->entradas)) : ?>
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
                        <?php foreach ($colaborador->entradas as $entrada) : ?>
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
                <?php if (!empty($colaborador->fichas)) : ?>
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
                        <?php foreach ($colaborador->fichas as $ficha) : ?>
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
                <?php if (!empty($colaborador->inventarios)) : ?>
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
                        <?php foreach ($colaborador->inventarios as $inventario) : ?>
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
            <div class="related">
                <h4><?= __('Related Solicitacaos') ?></h4>
                <?php if (!empty($colaborador->solicitacaos)) : ?>
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
                        <?php foreach ($colaborador->solicitacaos as $solicitacao) : ?>
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
            <div class="related">
                <h4><?= __('Related Termos') ?></h4>
                <?php if (!empty($colaborador->termos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Assinado') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Colaborador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colaborador->termos as $termo) : ?>
                        <tr>
                            <td><?= h($termo->id) ?></td>
                            <td><?= h($termo->assinado) ?></td>
                            <td><?= h($termo->data) ?></td>
                            <td><?= h($termo->ativo) ?></td>
                            <td><?= h($termo->created) ?></td>
                            <td><?= h($termo->modified) ?></td>
                            <td><?= h($termo->colaborador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Termos', 'action' => 'view', $termo->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Termos', 'action' => 'edit', $termo->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Termos', 'action' => 'delete', $termo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $termo->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($colaborador->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Login') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Permissao') ?></th>
                            <th><?= __('Ativo') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Modified') ?></th>
                            <th><?= __('Colaborador Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($colaborador->users as $user) : ?>
                        <tr>
                            <td><?= h($user->id) ?></td>
                            <td><?= h($user->login) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td><?= h($user->permissao) ?></td>
                            <td><?= h($user->ativo) ?></td>
                            <td><?= h($user->created) ?></td>
                            <td><?= h($user->modified) ?></td>
                            <td><?= h($user->colaborador_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $user->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $user->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
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