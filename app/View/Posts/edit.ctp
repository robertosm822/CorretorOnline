<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- File: /app/View/Posts/edit.ctp -->

<h1>Editar Post</h1>
<?php
    echo $this->Form->create('Post', array('action' => 'edit'));
    echo $this->Form->input('title', array('label'=>'Titulo:'));
    echo $this->Form->input('body', array('label'=>'Mensagem:','rows' => '3'));
    echo $this->Form->input('ativo', array('type'=>'checkbox','label'=>'Ativar / Desativar:'));
    
    echo $this->Form->input('id', array('type' => 'hidden'));
    echo $this->Form->end('Save Post');
?>
