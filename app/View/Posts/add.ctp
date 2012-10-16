
<div class="span2">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Posts'), array('action' => 'index')); ?></li>
	</ul>
</div>


<div class="span10">
<?php echo $this->Form->create('Post',array('inputDefaults'=>array('class'=>'input-large'))); ?>
	<fieldset>
		<legend><?php echo __('Add Post'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('message');
		echo $this->Form->input('receiver_id',array('empty'=>'Choose one'));
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