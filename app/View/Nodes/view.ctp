<div class="nodes view">
<h2><?php  echo __('Node');?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($node['Node']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($node['User']['id'], array('controller' => 'users', 'action' => 'view', $node['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parent Node'); ?></dt>
		<dd>
			<?php echo $this->Html->link($node['ParentNode']['name'], array('controller' => 'nodes', 'action' => 'view', $node['ParentNode']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Node Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($node['NodeType']['name'], array('controller' => 'node_types', 'action' => 'view', $node['NodeType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('In Tree'); ?></dt>
		<dd>
			<?php echo h($node['Node']['in_tree']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($node['Node']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($node['Node']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($node['Node']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Published'); ?></dt>
		<dd>
			<?php echo h($node['Node']['published']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Lft'); ?></dt>
		<dd>
			<?php echo h($node['Node']['lft']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rght'); ?></dt>
		<dd>
			<?php echo h($node['Node']['rght']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Publish'); ?></dt>
		<dd>
			<?php echo h($node['Node']['publish']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Order'); ?></dt>
		<dd>
			<?php echo h($node['Node']['order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Approved'); ?></dt>
		<dd>
			<?php echo h($node['Node']['approved']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Node'), array('action' => 'edit', $node['Node']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Node'), array('action' => 'delete', $node['Node']['id']), null, __('Are you sure you want to delete # %s?', $node['Node']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Nodes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Node'), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php echo __('Related Field Types');?></h3>
	<?php if (!empty($node['FieldType'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Help'); ?></th>
		<th><?php echo __('Node Type Id'); ?></th>
		<th><?php echo __('Node Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Type'); ?></th>
		<th><?php echo __('Width'); ?></th>
		<th><?php echo __('Height'); ?></th>
		<th><?php echo __('Validate Only Data'); ?></th>
		<th><?php echo __('Validation Type'); ?></th>
		<th><?php echo __('Validation Err'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($node['FieldType'] as $fieldType): ?>
		<tr>
			<td><?php echo $fieldType['id'];?></td>
			<td><?php echo $fieldType['name'];?></td>
			<td><?php echo $fieldType['help'];?></td>
			<td><?php echo $fieldType['node_type_id'];?></td>
			<td><?php echo $fieldType['node_id'];?></td>
			<td><?php echo $fieldType['parent_id'];?></td>
			<td><?php echo $fieldType['type'];?></td>
			<td><?php echo $fieldType['width'];?></td>
			<td><?php echo $fieldType['height'];?></td>
			<td><?php echo $fieldType['validate_only_data'];?></td>
			<td><?php echo $fieldType['validation_type'];?></td>
			<td><?php echo $fieldType['validation_err'];?></td>
			<td><?php echo $fieldType['order'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'field_types', 'action' => 'view', $fieldType['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'field_types', 'action' => 'edit', $fieldType['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'field_types', 'action' => 'delete', $fieldType['id']), null, __('Are you sure you want to delete # %s?', $fieldType['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Field Type'), array('controller' => 'field_types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Fields');?></h3>
	<?php if (!empty($node['Field'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Field Type Id'); ?></th>
		<th><?php echo __('Node Id'); ?></th>
		<th><?php echo __('Value Id'); ?></th>
		<th><?php echo __('Value Varchar'); ?></th>
		<th><?php echo __('Value Text'); ?></th>
		<th><?php echo __('Value Int'); ?></th>
		<th><?php echo __('Value Bool'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($node['Field'] as $field): ?>
		<tr>
			<td><?php echo $field['id'];?></td>
			<td><?php echo $field['field_type_id'];?></td>
			<td><?php echo $field['node_id'];?></td>
			<td><?php echo $field['value_id'];?></td>
			<td><?php echo $field['value_varchar'];?></td>
			<td><?php echo $field['value_text'];?></td>
			<td><?php echo $field['value_int'];?></td>
			<td><?php echo $field['value_bool'];?></td>
			<td><?php echo $field['order'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'fields', 'action' => 'view', $field['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'fields', 'action' => 'edit', $field['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'fields', 'action' => 'delete', $field['id']), null, __('Are you sure you want to delete # %s?', $field['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Field'), array('controller' => 'fields', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Nodes');?></h3>
	<?php if (!empty($node['ChildNode'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Parent Id'); ?></th>
		<th><?php echo __('Node Type Id'); ?></th>
		<th><?php echo __('In Tree'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Published'); ?></th>
		<th><?php echo __('Lft'); ?></th>
		<th><?php echo __('Rght'); ?></th>
		<th><?php echo __('Publish'); ?></th>
		<th><?php echo __('Order'); ?></th>
		<th><?php echo __('Approved'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($node['ChildNode'] as $childNode): ?>
		<tr>
			<td><?php echo $childNode['id'];?></td>
			<td><?php echo $childNode['user_id'];?></td>
			<td><?php echo $childNode['parent_id'];?></td>
			<td><?php echo $childNode['node_type_id'];?></td>
			<td><?php echo $childNode['in_tree'];?></td>
			<td><?php echo $childNode['name'];?></td>
			<td><?php echo $childNode['created'];?></td>
			<td><?php echo $childNode['modified'];?></td>
			<td><?php echo $childNode['published'];?></td>
			<td><?php echo $childNode['lft'];?></td>
			<td><?php echo $childNode['rght'];?></td>
			<td><?php echo $childNode['publish'];?></td>
			<td><?php echo $childNode['order'];?></td>
			<td><?php echo $childNode['approved'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'nodes', 'action' => 'view', $childNode['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'nodes', 'action' => 'edit', $childNode['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'nodes', 'action' => 'delete', $childNode['id']), null, __('Are you sure you want to delete # %s?', $childNode['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Child Node'), array('controller' => 'nodes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Poll Stats');?></h3>
	<?php if (!empty($node['PollStat'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Node Id'); ?></th>
		<th><?php echo __('Field Id'); ?></th>
		<th><?php echo __('Answer'); ?></th>
		<th><?php echo __('More'); ?></th>
		<th><?php echo __('Ip'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($node['PollStat'] as $pollStat): ?>
		<tr>
			<td><?php echo $pollStat['id'];?></td>
			<td><?php echo $pollStat['node_id'];?></td>
			<td><?php echo $pollStat['field_id'];?></td>
			<td><?php echo $pollStat['answer'];?></td>
			<td><?php echo $pollStat['more'];?></td>
			<td><?php echo $pollStat['ip'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'poll_stats', 'action' => 'view', $pollStat['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'poll_stats', 'action' => 'edit', $pollStat['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'poll_stats', 'action' => 'delete', $pollStat['id']), null, __('Are you sure you want to delete # %s?', $pollStat['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Poll Stat'), array('controller' => 'poll_stats', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
