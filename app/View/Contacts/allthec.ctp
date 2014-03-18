<div class="row">
	<div class="col-md-3 col-sm-3 col-lg-3 ">
		<div class="container">

			<?php  echo $this->element('header'); ?>
			
				<div class="row">
                    <div class="empty-content">
                    </div>            
                </div>		
		</div>
	</div>
	<div class=" col-md-9 col-sm-9 col-lg-9  vertical-center">
	<div class="cs index">
    <h2><?php echo __('Contact Forms'); ?></h2>
    <table cellpadding="0" cellspacing="0" class="table all-contacts-table">
    <tr class="contacts-table-head">
            <th><?php echo ('First Name'); ?></th>
            <th><?php echo ('Last Name'); ?></th>
            <th><?php echo ('Email'); ?></th>
            <th><?php echo ('Address'); ?></th>
            <th><?php echo ('Apt'); ?></th>
            <th><?php echo ('City'); ?></th>
            <th><?php echo ('State'); ?></th>
            <th><?php echo ('Zip'); ?></th>
            <th><?php echo ('Contact Number'); ?></th>
            <th><?php echo ('Joined'); ?></th>
            
            <th class="actions"><?php echo __('Actions'); ?></th>
    </tr>
    <?php foreach ($contacts as $c){ ?>
    <tr>
        <td><?php echo h($c['Contact']['first_name']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['last_name']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['email']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['address']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['apt']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['city']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['state']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['zip']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['contact_number']); ?>&nbsp;</td>
        <td><?php echo h($c['Contact']['signedup']); ?>&nbsp;</td>~
        
        <td class="actions">
            <?php echo $this->Form->postLink(__('Delete'), array('controller'=>'contacts',  'action' => 'delete', $c['Contact']['id']), null, __('Are you sure you want to delete # %s?', $c['Contact']['id'])); ?>
        </td>
    </tr>
<?php } ?>
    </table>

</div>

	</div>
	
</div>

