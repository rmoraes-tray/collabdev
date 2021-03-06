<div class="actions">
    <h3><?php echo __('Principal'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Criar Usuário'), array('controller' => 'usuarios', 'action' => 'add')); ?> </li>
    </ul>
</div>
<div class="usuarios index">
    <h2><?php echo __('Usuarios'); ?></h2>
    <table cellpadding="0" cellspacing="0">
    <tr>
        <th><?php echo $this->Paginator->sort('nome'); ?></th>
        <th><?php echo $this->Paginator->sort('email'); ?></th>
        <th><?php echo $this->Paginator->sort('login'); ?></th>
        <th><?php echo $this->Paginator->sort('grupo_id'); ?></th>
        <th></th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?php echo h($usuario['Usuario']['nome']); ?>&nbsp;</td>
        <td><?php echo h($usuario['Usuario']['email']); ?>&nbsp;</td>
        <td><?php echo h($usuario['Usuario']['login']); ?>&nbsp;</td>
        <td>
            <?php echo $this->Html->link($usuario['Grupo']['nome'], array('controller' => 'grupos', 'action' => 'view', $usuario['Grupo']['id'])); ?>
        </td>
        <td class="actions">
            <?php echo $this->Html->link(__('Visualizar'), array('action' => 'view', $usuario['Usuario']['id'])); ?>
            <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $usuario['Usuario']['id'])); ?>
            <?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $usuario['Usuario']['id']), null, __('Are you sure you want to delete # %s?', $usuario['Usuario']['id'])); ?>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
    <p>
    <?php
    echo $this->Paginator->counter(array(
    'format' => __('Página {:page} de {:pages}, visualizando {:current} registros, de {:count} no total, começando do registro {:start}, terminando no {:end}')
    ));
    ?>  </p>
    <div class="paging">
    <?php
        echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
    ?>
    </div>
</div>
<?php echo $this->Element('menu'); ?>
