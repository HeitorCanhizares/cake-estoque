<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Equipaestoque $equipaestoque
 * @var string[]|\Cake\Collection\CollectionInterface $equipamentos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipaestoque->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipaestoque->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Equipaestoques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="equipaestoques form content">
            <?= $this->Form->create($equipaestoque) ?>
            <fieldset>
                <legend><?= __('Edit Equipaestoque') ?></legend>
                <?php
                    echo $this->Form->control('ca');
                    echo $this->Form->control('datafab');
                    echo $this->Form->control('tipoperiodoval');
                    echo $this->Form->control('quantperiodoval');
                    echo $this->Form->control('tamanho');
                    echo $this->Form->control('quantdisponivel');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('equipamento_id', ['options' => $equipamentos]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
