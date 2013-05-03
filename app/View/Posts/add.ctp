<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- File: /app/View/Posts/add.ctp -->

<h1>Adicionar Novo Post:</h1>
<?php
//este camarada acrescenta ao inicio do form a seguinte estrutura: "<form id="PostAddForm" method="post" action="/posts/add">"
echo $this->Form->create('Post');
echo $this->Form->input('title', array('type'=>'text','style'=>'width:220px; height:18px; font-size: 12px;','label'=>'Titulo do Post:'));
echo $this->Form->input('body', array('style'=>'font-size: 12px;','rows' => '3', 'label'=>'Mensagem:'));
echo $this->Form->input('ativo', array('type'=>'checkbox','label'=>'Deixe marcado para ativar:'));
echo $this->Form->end('Salvar');
?>