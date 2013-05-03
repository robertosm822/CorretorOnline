<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Post extends AppModel {
    public $name = 'Post';
    
    //validacao do formulario de cadastro
    public $validate = array(
        'title' => array(
            'rule' => 'notEmpty',
            'rule'=> array('maxLength', 50),
            'message'=>'Campo deve ter no máximo 50 caracteres e não pode ser vazio'
        ),
        'body' => array(
            'rule' => 'notEmpty',
            'rule'=> array('minLength', 100),
            'message'=> 'Mensagem não pode ser inferior a 100 caracteres.'
        )
        ,
        'ativo' => array(
            'rule' => array('comparison', '!=', 0),
            'required' => true,
            'message' => 'Selecione ativar para criar o primeiro artigo',
            'on' => 'create'
        )
    );
}
?>
