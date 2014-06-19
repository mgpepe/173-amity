<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $title_for_layout; ?> | 173 Amity ST.
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->fetch('meta');
		echo $this->fetch('css?v=3');
		echo $this->fetch('script');
	?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- <script src="http://getbootstrap.com/2.3.2/assets/js/bootstrap-collapse.js"></script> -->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
	<?php echo $this->Html->css('styles'); ?>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div class="container main-container">
	<?php echo $this->Session->flash(); ?>
	<?php echo $this->fetch('content'); ?>
</div>
	<div class="legal-warning">
		<div class="warning-button-close"><span class="uppercase small-font">
            close
        </span></div>
		<p>All images are artist renderings. All dimensions are approximate and subject to normal construction variances and tolerances. Square footage exceeds the usable floor area. Sponsor reserves the right to make changes in accordance with the terms of the offering plan. Plans or dimensions may contain minor variations from floor to floor. This is not an offering. The complete offering terms are in an offering plan available from sponsor. File Number: CD#13-0027. Sponsor: 173 Amity LLC c/o Lonicera Partners LLC.</p>
	</div>
	<script src="js/main.js"></script>
	<!-- Latest compiled and minified JavaScript. At end so page loads faster -->
</body>
</html>
