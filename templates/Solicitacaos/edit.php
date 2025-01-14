<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Solicitacao $solicitacao
 * @var string[]|\Cake\Collection\CollectionInterface $categorias
 * @var string[]|\Cake\Collection\CollectionInterface $colaboradors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $solicitacao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $solicitacao->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Solicitacaos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="solicitacaos form content">
            <?= $this->Form->create($solicitacao) ?>
            <fieldset>
                <legend><?= __('Edit Solicitacao') ?></legend>
                <?php
                    echo $this->Form->control('descricao');
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('tamanho');
                    echo $this->Form->control('status');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('categoria_id', ['options' => $categorias]);
                    echo $this->Form->control('colaborador_id', ['options' => $colaboradors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
