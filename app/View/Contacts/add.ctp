<div class="row">
	<div class="col-md-3 col-sm-4 col-lg-3 ">
		<div class="container">

			<?php  echo $this->element('header'); ?>
			
				<div class="row">
					<div class="content">
						extra menu
					</div>
				</div>
		</div>
	</div>
	<div class="col-md-6 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 " style="background: #BEB8AC;">
	

		<?php if (!$hide_form){ ?>
			<div class="row">
				<div class="col-md-12">
					<div class="contactForms form ">
						<h1 class="in-contacts">Contact</h1>
					</div>
				</div>
			</div>
			
			<div class="row">
				<?php echo $this->Form->create('Contact'); ?>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">First Name*</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('first_name', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Last Name*</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('last_name', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Email*</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('email', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Address</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('address', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Apt/City</label>
    <div class="col-sm-4">
		<?php echo $this->Form->input('apt', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
    <div class="col-sm-5">
		<?php echo $this->Form->input('city', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">State/zip</label>
    <div class="col-sm-4">
		<?php echo $this->Form->input('state', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
    <div class="col-sm-5">
		<?php echo $this->Form->input('zip', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label">Contact Number</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('contact_number', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
	<div class="col-sm-9 col-sm-offset-3">
		Required*
		<div class="pull-right">
			<button type="submit" class="btn">Submit</button>
		</div>
		<div style="text-align:left;margin-top: 40px;">View by appointments only<br>646 613 2624</div>
	</div>
</div>

				<?php echo $this->Form->end(); ?>
			</div>
			

		<?php } else{ ?>
			<div class="row">
				<div class="col-md-12">
					<h1 class="in-contacts">
						Thank you for your Inquiry<br/>regarding 173 Amity street.<br/><br/>
						Your registration has been received.
					</h1>
				</div>
			</div>
		<?php } ?>
	</div>
	
</div>


<script src="js/jquery.backstretch.min.js"></script>
<script> $.backstretch("/img/image-for-back.jpg"); </script>

