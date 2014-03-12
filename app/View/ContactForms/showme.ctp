<div class="contactForms index">
	<style>
	td{
		margin: 5px;
	}
	</style>
	<h2><?php echo __('Contact Forms'); ?></h2>
	<table cellpadding="0" cellspacing="0" class="table">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('first_name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('message'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contactForms as $contactForm): ?>
	<tr>
		<td><?php echo h($contactForm['ContactForm']['id']); ?>&nbsp;</td>
		<td><?php echo h($contactForm['ContactForm']['first_name']); ?>&nbsp;</td>
		<td><?php echo h($contactForm['ContactForm']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($contactForm['ContactForm']['phone']); ?>&nbsp;</td>
		<td><?php echo h($contactForm['ContactForm']['email']); ?>&nbsp;</td>
		<td><?php echo h($contactForm['ContactForm']['message']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactForm['ContactForm']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactForm['ContactForm']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactForm['ContactForm']['id']), null, __('Are you sure you want to delete # %s?', $contactForm['ContactForm']['id'])); ?>
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