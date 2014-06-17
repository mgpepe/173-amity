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
		<div class="apartments form">
			<?php echo $this->Form->create('Apartment'); ?>
			<fieldset>
				<legend><?php echo __('Add Apartment'); ?></legend>
				<div class="row">
				<?php
					echo $this->Form->input('name');
					echo $this->Form->input('bedrooms');
					echo $this->Form->input('baths');
					echo $this->Form->input('interior');
					echo $this->Form->input('price');
					echo $this->Form->input('taxes');
					echo $this->Form->input('common_charges');
					echo $this->Form->input('status', array(
						'options'=>array('Available'=>'Available', 'Unavailable'=>'Unavailable', 'In contract'=>'In contract'),
						'empty'=>'(choose status)'));
					echo $this->Form->input('floorplan');
				?>
				</div>
			</fieldset>
				<?php echo $this->Form->end(__('Submit')); ?>
		</div>
	</div>
</div>
