<div class="contactForms form">
<?php echo $this->Form->create('ContactForm'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contact Form'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('first_name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('message');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContactForm.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContactForm.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contact Forms'), array('action' => 'index')); ?></li>
	</ul>
</div>
