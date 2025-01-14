<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipamento $equipamento
 * @var string[]|\Cake\Collection\CollectionInterface $categorias
 * @var string[]|\Cake\Collection\CollectionInterface $marcas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipamento->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Equipamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="equipamentos form content">
            <?= $this->Form->create($equipamento) ?>
            <fieldset>
                <legend><?= __('Edit Equipamento') ?></legend>
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
