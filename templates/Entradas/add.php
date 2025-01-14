<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Entrada $entrada
 * @var \Cake\Collection\CollectionInterface|string[] $equipaestoques
 * @var \Cake\Collection\CollectionInterface|string[] $colaboradors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Entradas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="entradas form content">
            <?= $this->Form->create($entrada) ?>
            <fieldset>
                <legend><?= __('Add Entrada') ?></legend>
                <?php
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('data');
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
