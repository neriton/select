<?php

App::uses('AppModel', 'Model');
class Cliente extends AppModel{
    
    public $usetable = 'clientes';
    
    public $displayField = 'nome';
    
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty'
        ),
        'telefone' => array(
            'rule' => 'notEmpty'
        ),
        'celular' => array(
            'rule' => 'notEmpty'
        ),
        'cidade_id' => array(
            'rule' => 'notEmpty'
        ),
        'estado_id' => array(
            'rule' => 'notEmpty'
        ),
    
    );
}

?>
