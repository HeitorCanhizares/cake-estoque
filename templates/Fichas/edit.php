<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ficha $ficha
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
                ['action' => 'delete', $ficha->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ficha->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Fichas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="fichas form content">
            <?= $this->Form->create($ficha) ?>
            <fieldset>
                <legend><?= __('Edit Ficha') ?></legend>
                <?php
                    echo $this->Form->control('quantidade');
                    echo $this->Form->control('assinado');
                    echo $this->Form->control('data');
                    echo $this->Form->control('transacao');
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
