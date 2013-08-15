<div class="charges index">
	<h2><?php echo __('Charges'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('branch_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('deadline'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('formation'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($charges as $charge): ?>
	<tr>
		<td><?php echo h($charge['Charge']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($charge['Branch']['name'], array('controller' => 'branches', 'action' => 'view', $charge['Branch']['id'])); ?>
		</td>
		<td><?php echo h($charge['Charge']['title']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['deadline']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['description']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['formation']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['created']); ?>&nbsp;</td>
		<td><?php echo h($charge['Charge']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $charge['Charge']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $charge['Charge']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $charge['Charge']['id']), null, __('Are you sure you want to delete # %s?', $charge['Charge']['id'])); ?>
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
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Charge'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Branches'), array('controller' => 'branches', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Branch'), array('controller' => 'branches', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Requirements'), array('controller' => 'requirements', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Requirement'), array('controller' => 'requirements', 'action' => 'add')); ?> </li>
	</ul>
</div>
