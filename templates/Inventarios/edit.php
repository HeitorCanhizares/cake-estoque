<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Inventario $inventario
 * @var string[]|\Cake\Collection\CollectionInterface $equipaestoques
 * @var string[]|\Cake\Collection\CollectionInterface $colaboradors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $inventario->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $inventario->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Inventarios'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="inventarios form content">
            <?= $this->Form->create($inventario) ?>
            <fieldset>
                <legend><?= __('Edit Inventario') ?></legend>
                <?php
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('data');
                    echo $this->Form->control('transacao');
                    echo $this->Form->control('observacao');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('equipaestoque_id', ['options' => $equipaestoques]);
                    echo $this->Form->control('colaborador_id', ['options' => $colaboradors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
