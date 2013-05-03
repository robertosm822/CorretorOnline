<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<br />

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Telefone</th>
        <th>Celular</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($contatos as $contato): ?>
    <tr>
        <td><?php echo $contato['Contato']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($contato['Contato']['nome'],
array('controller' => 'posts', 'action' => 'view', $contato['Contato']['id'])); ?>
        </td>
        <td><?php echo $contato['Contato']['email']; ?></td>
        <td><?php echo $contato['Contato']['telefone']; ?></td>
        <td>
            <?php echo $contato['Contato']['celular'];?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
