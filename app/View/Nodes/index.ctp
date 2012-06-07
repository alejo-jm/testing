<div class="nodes index">
	<h2><?php echo __('Nodes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('parent_id');?></th>
			<th><?php echo $this->Paginator->sort('node_type_id');?></th>
			<th><?php echo $this->Paginator->sort('in_tree');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('published');?></th>
			<th><?php echo $this->Paginator->sort('lft');?></th>
			<th><?php echo $this->Paginator->sort('rght');?></th>
			<th><?php echo $this->Paginator->sort('publish');?></th>
			<th><?php echo $this->Paginator->sort('order');?></th>
			<th><?php echo $this->Paginator->sort('approved');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	foreach ($nodes as $node): ?>
	<tr>
		<td><?php echo h($node['Node']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($node['User']['id'], array('controller' => 'users', 'action' => 'view', $node['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($node['ParentNode']['name'], array('controller' => 'nodes', 'action' => 'view', $node['ParentNode']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($node['NodeType']['name'], array('controller' => 'node_types', 'action' => 'view', $node['NodeType']['id'])); ?>
		</td>
		<td><?php echo h($node['Node']['in_tree']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['name']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['created']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['modified']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['published']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['lft']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['rght']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['publish']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['order']); ?>&nbsp;</td>
		<td><?php echo h($node['Node']['approved']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $node['Node']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $node['Node']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $node['Node']['id']), null, __('Are you sure you want to delete # %s?', $node['Node']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Node'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('controller' => 'nodes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Node'), array('controller' => 'nodes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Node Types'), array('controller' => 'node_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node Type'), array('controller' => 'node_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Field Types'), array('controller' => 'field_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field Type'), array('controller' => 'field_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Fields'), array('controller' => 'fields', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Poll Stats'), array('controller' => 'poll_stats', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Poll Stat'), array('controller' => 'poll_stats', 'action' => 'add')); ?> </li>
	</ul>
</div>
