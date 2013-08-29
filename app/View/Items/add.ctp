<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('presentacion');
		echo $this->Form->input('description');
		echo $this->Form->input('category_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images Items'), array('controller' => 'images_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Images Item'), array('controller' => 'images_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Items Quotes'), array('controller' => 'items_quotes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Items Quote'), array('controller' => 'items_quotes', 'action' => 'add')); ?> </li>
	</ul>
</div>
