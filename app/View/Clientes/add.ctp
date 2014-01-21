<?php echo $this->Html->script('views/cliente/listar_cidades.js'); ?>
<div>
    <?php echo $this->Html->link('Voltar', array('controller' => 'clientes', 'action' => 'index')); ?>
</div>
<div class="form">
    <?php echo $this->Form->create(null); ?>
    <fieldset>
        <legend><?php echo __('Exemplo de select dinamico com cidades e estados do Brasil - index.ctp'); ?></legend>
        <?php echo $this->Form->input('nome'); ?>
        <?php echo $this->Form->input('endereco'); ?>
        <?php echo $this->Form->input('bairro'); ?>
        <?php echo $this->Form->input('cep'); ?>
        <?php echo $this->Form->input('estado_id', array ('options' => $estados, 'id' => 'estados', 'empty' => 'Selecione um estado')); ?>
        <?php echo $this->Form->input('cidade_id', array ('type' => 'select', 'id' => 'cidades', 'empty' => 'selecione uma cidade')); ?>
         </fieldset>
    <?php echo $this->Form->end('Cadastrar'); ?>
</div>
