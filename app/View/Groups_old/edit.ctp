<div class="span2">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
	</ul>
</div>


<div class="span10">
<?php echo $this->Form->create('Group',array('inputDefaults'=>array('class'=>'input-medium'))); ?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
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
</div>

<script type="text/javascript">
  
$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#GroupEditForm").validate({
		rules: {
			
			
			"data[Group][group_name]": {
				required: true,
				minlength: 5
			}
		},
		messages: {
			
			
			"data[Group][group_name]": {
				required: "Please enter a Group name",
				minlength: "group name must consist of at least 5 characters"
			}
		}
	});
});


</script>