<div class="nodes form">
<?php echo $this->Form->create('Node');?>
	<fieldset>
		<legend><?php echo __('Edit Node'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('parent_id');
		echo $this->Form->input('node_type_id');
		echo $this->Form->input('in_tree');
		echo $this->Form->input('name');
		echo $this->Form->input('published');
		echo $this->Form->input('lft');
		echo $this->Form->input('rght');
		echo $this->Form->input('publish');
		echo $this->Form->input('order');
		echo $this->Form->input('approved');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Node.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Node.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('action' => 'index'));?></li>
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
