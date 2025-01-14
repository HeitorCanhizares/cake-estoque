<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipamento $equipamento
 * @var \Cake\Collection\CollectionInterface|string[] $categorias
 * @var \Cake\Collection\CollectionInterface|string[] $marcas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Equipamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="equipamentos form content">
            <?= $this->Form->create($equipamento) ?>
            <fieldset>
                <legend><?= __('Add Equipamento') ?></legend>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('categoria_id', ['options' => $categorias]);
                    echo $this->Form->control('marca_id', ['options' => $marcas]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
