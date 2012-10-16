
<div class="span2">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Departments'), array('action' => 'index')); ?></li>
	</ul>
</div>


<div class="span10">
<?php echo $this->Form->create('Department'); ?>
	<fieldset>
		<legend><?php echo __('Add Department'); ?></legend>
	<?php
		echo $this->Form->input('department_name');
		echo $this->Form->input('slug');
		
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>