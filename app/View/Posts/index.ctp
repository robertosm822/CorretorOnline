<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!-- File: /app/View/Posts/index.ctp -->

<h1>Posts do Blog</h1>
<?php echo $this->Html->link('Adicionar Novo Post:', array('controller' => 'posts', 'action' => 'add')); ?>
<br />
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Data de Criação</th>
        <th>Status</th>
        <th>Ação</th>
    </tr>

    <!-- Aqui é onde nós percorremos nossa matriz $posts, imprimindo
         as informações dos posts -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td><?php echo $post['Post']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['created']; ?></td>
        <td><?php if($post['Post']['ativo'] == 0){ echo "Inativo";} else { echo "Ativo";} ?></td>
        <td>
            <?php echo $this->Form->postLink(
                'Apagar',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Tem Certeta que deseja apagar?')
            )?>
            <?php echo $this->Html->link('Editar', array('action' => 'edit', $post['Post']['id']));?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
