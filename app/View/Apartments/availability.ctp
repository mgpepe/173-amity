<div class="row">
	<div id="aside" class="col-md-3 col-sm-4 col-lg-3">
		<div class="container">

			<?php echo $this->element('header'); ?>

			<div class="row">
                <div class="empty-content">
                	<a href="#" class="legal-notice-btn">LEGAL</a>
                </div>
            </div>
		</div>
	</div>
	<div class="col-md-9 col-sm-8 col-lg-9 very-big-bottom">
		<table class="availability-table">
			<thead>
				<tr>
			  		<th class="uppercase">Residence</th>
			  		<th class="uppercase">Bedrooms</th>
			  		<th class="uppercase">Baths</th>
			  		<th class="uppercase">Interior<br>Sq.Ft</th>
			  		<th class="uppercase">Price</th>
			  		<th class="uppercase">Estimated<br/>Monthly<br/>Taxes</th>
			  		<th class="uppercase">Estimated<br/>Monthly<br/>Common<br/>Charges</th>
			  		<th class="uppercase">Status</th>
			  	</tr>
			</thead>
			<tbody>
				<?php foreach ($apartments as $a){ ?>
					<tr>
						<td class="uppercase">
			  				<span class="uppercase bolded"><?php echo $a['Apartment']['name'] ?></span>
			  				<br/>
				  			Floorplan
				  			<br>
				  			<a target="_blank" class="uppercase small-font floor-link" href="<?php echo '/files/floorplans/' . $a['Apartment']['floorplan'] ?>">View</a> /
				  			<?php echo $this->Html->link('Download', array('controller'=>'apartments', 'action'=>'dwnld',  $a['Apartment']['id'] ),
				  				array('class'=>'uppercase small-font floor-link',)
				  			); ?>
				  		</td>
				  		<td>
				  			<span><?php echo $a['Apartment']['bedrooms'] ?></span>
				  		</td>
				  		<td>
				  			<span><?php echo $a['Apartment']['baths'] ?></span>
				  		</td>
				  		<td>
				  			<span class="uppercase"><?php echo htmlspecialchars_decode($a['Apartment']['interior']);  ?></span>
				  		</td>
				  		<td>
				  			<span class="uppercase">
				  				<?php if($a['Apartment']['status']=='Available' or $a['Apartment']['status']=='Unavailable'){
				  					echo $a['Apartment']['price'];
				  				}else {
				  					echo '<span class="in-contract">-</span>';
				  				} ?>
				  			</span>
				  		</td>
				  		<td>
				  			<span>
				  				<?php
				  				if($a['Apartment']['status']=='Available' or $a['Apartment']['status']=='Unavailable'){
				  					echo $a['Apartment']['taxes'];
				  				}else {
				  					echo '<span class="in-contract">-</span>';
				  				} ?>
				  			</span>
				  		</td>
				  		<td>
				  			<span>
				  				<?php
				  				if($a['Apartment']['status']=='Available' or $a['Apartment']['status']=='Unavailable'){
				  					echo $a['Apartment']['common_charges'];
				  				}else {
				  					echo '<span class="in-contract">-</span>';
				  				} ?>
				  			</span>
				  		</td>
				  		<td>
				  			<span><?php echo $a['Apartment']['status'] ?></span>
				  		</td>
				  	</tr>
				<?php }?>
			</tbody>
		</table>
	</div>
	<footer class="availability-footer very-small-font col-md-9 col-sm-8 col-lg-9">
		<!-- <img src="/img/signature2.gif" alt="signature2" class="sig1">
		<img src="/img/signature.png" alt="signture" class="sig2">
		<p>All dimensions are appropriate and subject to normal construction variances and tolerances. Square footage exceeds the usable floor area. Sponsor reserves the right to make changes in accordance with the terms of the offering plan. Plans and dimensions may contain minor variations from floor to floor. This is not an offerig, 173 Amity LLC something something. The complete offering terms arein an offering plan available from sponsor. File CD13-0027</p> -->

	</footer>

</div>
