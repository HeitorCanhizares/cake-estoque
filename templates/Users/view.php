<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="users view content">
            <h3><?= h($user->login) ?></h3>
            <table>
                <tr>
                    <th><?= __('Login') ?></th>
                    <td><?= h($user->login) ?></td>
                </tr>
                <tr>
                    <th><?= __('Permissao') ?></th>
                    <td><?= h($user->permissao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Ativo') ?></th>
                    <td><?= h($user->ativo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Colaborador') ?></th>
                    <td><?= $user->hasValue('colaborador') ? $this->Html->link($user->colaborador->nome, ['controller' => 'Colaboradors', 'action' => 'view', $user->colaborador->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($user->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($user->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>