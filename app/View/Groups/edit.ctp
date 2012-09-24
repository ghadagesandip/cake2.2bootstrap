<div class="groups form">
<?php echo $this->Form->create('Group'); ?>
	<fieldset>
		<legend><?php echo __('Edit Group'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('group_name');
		echo $this->Form->input('slug');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Group.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Group.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('action' => 'index')); ?></li>
	</ul>
</div>

<script type="text/javascript">
  
$().ready(function() {
	
	// validate signup form on keyup and submit
	$("#GroupEditForm").validate({
		rules: {
			
			
			"data[Group][group_name]": {
				required: true,
				minlength: 5
			},
			"data[Group][slug]": {
				required: true,
				minlength: 5
			}	
		},
		messages: {
			
			
			"data[Group][group_name]": {
				required: "Please enter a Group name",
				minlength: "group name must consist of at least 5 characters"
			},
			"data[Group][slug]": {
				required: "Please enter a slug",
				minlength: "Slug must consist of at least 5 characters"
			}
		}
	});
});


</script>