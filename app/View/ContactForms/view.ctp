<div class="contactForms view">
<h2><?php echo __('Contact Form'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactForm['ContactForm']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('First Name'); ?></dt>
		<dd>
			<?php echo h($contactForm['ContactForm']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($contactForm['ContactForm']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($contactForm['ContactForm']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($contactForm['ContactForm']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Message'); ?></dt>
		<dd>
			<?php echo h($contactForm['ContactForm']['message']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact Form'), array('action' => 'edit', $contactForm['ContactForm']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contact Form'), array('action' => 'delete', $contactForm['ContactForm']['id']), null, __('Are you sure you want to delete # %s?', $contactForm['ContactForm']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Forms'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Form'), array('action' => 'add')); ?> </li>
	</ul>
</div>
