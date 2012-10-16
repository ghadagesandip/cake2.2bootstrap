
<div class="span2">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Department'), array('action' => 'add')); ?></li>
	</ul>
</div>

<div class="span10">
	<h2><?php echo __('Departments'); ?></h2>
	<table class="table table-hover"cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('department_name'); ?></th>
			<th><?php echo $this->Paginator->sort('slug'); ?></th>
			
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($departments as $department): ?>
	<tr>
		<td><?php echo h($department['Department']['id']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['department_name']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['slug']); ?>&nbsp;</td>
		
		<td><?php echo h($department['Department']['created']); ?>&nbsp;</td>
		<td><?php echo h($department['Department']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $department['Department']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $department['Department']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $department['Department']['id']), null, __('Are you sure you want to delete # %s?', $department['Department']['id'])); ?>
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
