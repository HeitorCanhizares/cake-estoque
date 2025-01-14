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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $colaborador->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $colaborador->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Colaboradors'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column column-80">
        <div class="colaboradors form content">
            <?= $this->Form->create($colaborador) ?>
            <fieldset>
                <legend><?= __('Edit Colaborador') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('dtnascimento');
                    echo $this->Form->control('dtadmissao');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('rg');
                    echo $this->Form->control('celular');
                    echo $this->Form->control('sexob');
                    echo $this->Form->control('estadocivil');
                    echo $this->Form->control('digital');
                    echo $this->Form->control('foto');
                    echo $this->Form->control('cargo');
                    echo $this->Form->control('ativo');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
