<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<h1>Fale conosco:</h1>
<p>Entre em contato conosco.</p>

<?php
//este camarada acrescenta ao inicio do form a seguinte estrutura: "<form id="PostAddForm" method="post" action="/posts/add">"
echo $this->Form->create('Contato');

echo $this->Form->input('nome', array('type'=>'text','style'=>'width:220px; height:18px; font-size: 12px;','label'=>'Seu nome:'));
echo $this->Form->input('email', array('type'=>'text','style'=>'width:220px; height:18px; font-size: 12px;','label'=>'Seu e-mail:'));
echo $this->Form->input('telefone', array('type'=>'text','style'=>'width:220px; height:18px; font-size: 12px;','label'=>'Seu Telefone:'));
echo $this->Form->input('celular', array('type'=>'text','style'=>'width:220px; height:18px; font-size: 12px;','label'=>'Seu Celular:'));
echo $this->Form->input('mensagem', array('style'=>'font-size: 12px;','rows' => '3', 'label'=>'Mensagem:'));
/*
echo $this->Form->input('ativo', array('type'=>'checkbox','label'=>'Deixe marcado para ativar:'));
*/
 echo $this->Form->end('Salvar');
 
?>
