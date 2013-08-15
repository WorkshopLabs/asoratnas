<div class="requirements form">
<?php echo $this->Form->create('Requirement'); ?>
	<fieldset>
		<legend><?php echo __('Add Requirement'); ?></legend>
	<?php
		echo $this->Form->input('charge_id');
		echo $this->Form->input('fullname');
		echo $this->Form->input('date_of_birth');
		echo $this->Form->input('sex');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('curriculum');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Requirements'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
	</ul>
</div>
