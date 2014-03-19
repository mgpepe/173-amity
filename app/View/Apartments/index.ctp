<div class="row">
	<div class="col-md-3 col-sm-4 col-lg-3">
		<div class="container">

			<?php echo $this->element('header'); ?>
			
			<div class="row">
                <div class="empty-content">
                </div>
            </div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8 col-lg-9 very-big-bottom">
		<div class="apartments index">
			<table class="availability-table" cellpadding="0" cellspacing="0">
			<thead>
				<tr>
					<th class="uppercase"><?php echo ('name'); ?></th>
					<th class="uppercase"><?php echo ('bedrooms'); ?></th>
					<th class="uppercase"><?php echo ('baths'); ?></th>
					<th class="uppercase"><?php echo ('interior'); ?></th>
					<th class="uppercase"><?php echo ('price'); ?></th>
					<th class="uppercase"><?php echo ('Estimated<br/>Monthly<br/>Taxes'); ?></th>
					<th class="uppercase"><?php echo ('Estimated<br/>Monthly<br/>Common<br/>Charges'); ?></th>
					<th class="uppercase"><?php echo ('status'); ?></th>
					<th class="actions"><?php echo __('Actions'); ?></th>	
				</tr>				
			</thead>
			<?php foreach ($apartments as $apartment): ?>
			<tr>
				<td class="uppercase"><?php echo h($apartment['Apartment']['name']); ?>&nbsp;
					<br>
					<?php echo '<a class="uppercase small-font floor-link" href="' . h($apartment['Apartment']['floorplan']) . '">floor plan</a>'; ?>&nbsp;
				</td>
				<td><?php echo h($apartment['Apartment']['bedrooms']); ?>&nbsp;</td>
				<td><?php echo h($apartment['Apartment']['baths']); ?>&nbsp;</td>
				<td><?php echo h($apartment['Apartment']['interior']); ?>&nbsp;</td>
				<td><?php echo h($apartment['Apartment']['price']); ?>&nbsp;</td>
				<td><?php echo h($apartment['Apartment']['taxes']); ?>&nbsp;</td>
				<td><?php echo h($apartment['Apartment']['common_charges']); ?>&nbsp;</td>
				<td><?php echo h($apartment['Apartment']['status']); ?>&nbsp;</td>
				<td class="actions">
					<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $apartment['Apartment']['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
	</table>
</div>
	</div>
</div>



<!--<div class="actions">
	<h3><?php /* echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Apartment'), array('action' => 'add')); ?></li>
	</ul>
</div> */
