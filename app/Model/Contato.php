<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Contato extends AppModel {
    public $name = 'Contato';
    
    //validacao do formulario de contato
    public $validate = array(
        'nome' => array(
            'rule' => 'notEmpty',
            'rule'=> array('maxLength', 50),
            'message'=>'Campo deve ter no máximo 50 caracteres e não pode ser vazio'
        ),
        'mensagem' => array(
            'rule' => 'notEmpty',
            'message'=> 'Preencha o campo de mensagem.'
        ),
        'email' => array( 
            'rule'=>'email',
            'rule'=> array('maxLength', 150),
            'messsage'=> 'E-mail obrigatório e no formato correto.'
            ),
        'telefone' => array(
            'rule'=> array('maxLength', 15),
            'rule' => array('phone', '/\((10)|([1-9][1-9])\)/', 'us'),
            'message'=>'Digite somente numeros no formato (XX) XXXX-XXXX.'
        ),
        'celular' => array(
            'rule'=> array('maxLength', 15),
            'rule' => array('phone', '/\((10)|([1-9][1-9])\)/', 'us'),
            'message'=>'Digite somente numeros no formato (XX) XXXX-XXXX.'
        )
                    
    );
}
