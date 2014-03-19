<div class="apartments view">
<h2><?php echo __('Apartment'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bedrooms'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['bedrooms']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Baths'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['baths']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Interior'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['interior']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Price'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Taxes'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['taxes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Common Charges'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['common_charges']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Status'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['status']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Floorplan'); ?></dt>
		<dd>
			<?php echo h($apartment['Apartment']['floorplan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Apartment'), array('action' => 'edit', $apartment['Apartment']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Apartment'), array('action' => 'delete', $apartment['Apartment']['id']), null, __('Are you sure you want to delete # %s?', $apartment['Apartment']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Apartments'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Apartment'), array('action' => 'add')); ?> </li>
	</ul>
</div>
