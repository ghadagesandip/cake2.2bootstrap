<div class="users view">
<h2><?php  echo __('User'); ?></h2>
	<dl>
		<dt></dt>
		<dd>
			<?php echo $this->Html->image('../uploads/user_profile_images/'.$user['User']['profile_image']);?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['group_name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Department']['department_name'], array('controller' => 'Departments', 'action' => 'view', $user['Department']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Middle Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['middle_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($user['User']['last_name']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Date Of Birth'); ?></dt>
		<dd>
			<?php echo h($user['User']['date_of_birth']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gender'); ?></dt>
		<dd>
			<?php echo h($user['User']['gender']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['email_address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contact Number'); ?></dt>
		<dd>
			<?php echo h($user['User']['contact_number']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($user['User']['address']); ?>
			&nbsp;
		</dd>
		
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Department'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Department']['department_name'], array('controller' => 'departments', 'action' => 'view', $user['Department']['id'])); ?>
			&nbsp;
		</dd>		
		<dt><?php echo __('Performance Points'); ?></dt>
		<dd>
			<?php echo h($user['User']['performance_points']); ?>
			&nbsp;
		</dd>
		
		
		<dt><?php echo __('Fax'); ?></dt>
		<dd>
			<?php echo h($user['User']['fax']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telephone No'); ?></dt>
		<dd>
			<?php echo h($user['User']['telephone_no']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Signature Image'); ?></dt>
		<dd>
			<?php echo $this->Html->image('../uploads/user_signature_image/'.$user['User']['signature_image'],array('height'=>'20','width'=>'100'));?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), null, __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Departments'), array('controller' => 'departments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Department'), array('controller' => 'departments', 'action' => 'add')); ?> </li>
		
		
	</ul>
</div>
<!---
<div class="related">
	<h3><?php echo __('Related Corrective Actions'); ?></h3>
	<?php if (!empty($user['CorrectiveAction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Non Conformance Id'); ?></th>
		<th><?php echo __('Root Cause Analysis'); ?></th>
		<th><?php echo __('Action To Be Taken'); ?></th>
		<th><?php echo __('Verification Of Action'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Support File'); ?></th>
		<th><?php echo __('Verified By'); ?></th>
		<th><?php echo __('Sender Comment'); ?></th>
		<th><?php echo __('Approver Comments'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($user['CorrectiveAction'] as $correctiveAction): ?>
		<tr>
			<td><?php echo $correctiveAction['id']; ?></td>
			<td><?php echo $correctiveAction['non_conformance_id']; ?></td>
			<td><?php echo $correctiveAction['root_cause_analysis']; ?></td>
			<td><?php echo $correctiveAction['action_to_be_taken']; ?></td>
			<td><?php echo $correctiveAction['verification_of_action']; ?></td>
			<td><?php echo $correctiveAction['user_id']; ?></td>
			<td><?php echo $correctiveAction['created']; ?></td>
			<td><?php echo $correctiveAction['modified']; ?></td>
			<td><?php echo $correctiveAction['status']; ?></td>
			<td><?php echo $correctiveAction['support_file']; ?></td>
			<td><?php echo $correctiveAction['verified_by']; ?></td>
			<td><?php echo $correctiveAction['sender_comment']; ?></td>
			<td><?php echo $correctiveAction['approver_comments']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'corrective_actions', 'action' => 'view', $correctiveAction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'corrective_actions', 'action' => 'edit', $correctiveAction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'corrective_actions', 'action' => 'delete', $correctiveAction['id']), null, __('Are you sure you want to delete # %s?', $correctiveAction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Corrective Action'), array('controller' => 'corrective_actions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
-->