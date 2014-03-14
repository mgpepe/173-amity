<div class="row">
	<div class="col-md-3 col-sm-4 col-lg-3 ">
		<div class="container">

			<?php  echo $this->element('header'); ?>
			
				<div class="row">
					<div class="contact-content">
						<p class="big-bottom">
                            <span class="uppercase small-font">director of sales</span>
                            <br>
                            <span class="times big-font">Sean Turner</span>                  
                        </p>

                        <p class="big-bottom">
                            <span class="uppercase small-font">some sort of title</span>
                            <br>
                            <span class="times big-font">Timothy McCarthy</span>                  
                        </p>

                        <p class="uppercase big-bottom small-font">Exclusive sales &amp; marketing</p>
                        <img src="/img/signature.gif" alt="signature" class="img-responsive signature-img">
					</div>
				</div>
		</div>
	</div>
	<div class="contact-form col-md-6 col-sm-6 col-lg-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3 vertical-center">
	

		<?php if (!$hide_form){ ?>
			<div class="row">
				<div class="col-md-12">
					<div class="contactForms form ">
						<h1 class="in-contacts uppercase">Contact</h1>
					</div>
				</div>
			</div>
			
			<div class="row">
				<?php echo $this->Form->create('Contact'); ?>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">First Name*</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('first_name', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">Last Name*</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('last_name', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">Email*</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('email', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">Address</label>
    <div class="col-sm-9">
		<?php echo $this->Form->input('address', array(
		'div'=>false, 
		'label'=>false, 
		'class'=>'form-control', 
		)); ?>
    </div>
</div>

<div class="form-group">
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">Apt/City</label>
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
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">State/zip</label>
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
    <label for="inputEmail3" class="col-sm-3 control-label uppercase">Contact Number</label>
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
		<span class="uppercase">Required*</span>
		<div class="pull-right">
			<button type="submit" class="btn no-bdradius uppercase medium-font">Submit</button>
		</div>
		<div class="uppercase" style="text-align:left;margin-top: 40px;">View by appointments only<br>646 613 2624</div>
	</div>
</div>

				<?php echo $this->Form->end(); ?>
			</div>
			

		<?php } else{ ?>
			<div class="row">
				<div class="col-md-12">
					<h1 class="in-contacts uppercase">
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

