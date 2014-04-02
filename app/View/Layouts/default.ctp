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
	<?php // echo $this->element('sql_dump'); ?>
	<!-- Latest compiled and minified JavaScript. At end so page loads faster -->
</body>
</html>
