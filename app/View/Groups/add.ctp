
<div class="span2">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
	</ul>
</div>


<div class="span10">
<?php echo $this->Form->create('Group',array('inputDefaults'=>array('class'=>'input-medium'))); ?>
	<fieldset>
		<legend><?php echo __('Add Group'); ?></legend>
	<?php
		echo $this->Form->input('group_name');
		
	?>
	</fieldset>
<?php 
    $options = array(
        'label' => 'Save',
         'class' => 'btn btn-success',
    );

    echo $this->Form->end($options);
?>
</div