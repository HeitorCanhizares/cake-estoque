<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Termo $termo
 * @var \Cake\Collection\CollectionInterface|string[] $colaboradors
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Termos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="termos form content">
            <?= $this->Form->create($termo) ?>
            <fieldset>
                <legend><?= __('Add Termo') ?></legend>
                <?php
                    echo $this->Form->control('assinado');
                    echo $this->Form->control('data');
                    echo $this->Form->control('ativo');
                    echo $this->Form->control('colaborador_id', ['options' => $colaboradors]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
