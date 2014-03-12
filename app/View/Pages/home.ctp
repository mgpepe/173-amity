
<div class="container ">
	<div class="sackett-caption pull-right ">View from roof top terrace at 138 Sackett.</div>
	<div id="open-houses">
		<img src="/img/open-houses.png"/>
	</div>
</div>
<div class="container navbar-fixed-bottom-sackett" style="bottom: -200px;">
	
	<div class="sackett-white-sheet clearfix ">
		<h1 style="font-size: 18px; font-weight: bold;">Where the Water Meets the Park<span class="close-x">CLOSE X</span></h1>
		<p>
			Introducing 138 Sackett, Brooklyn’s newest and most strikingly attractive property in the Columbia Waterfront District. This is a structure boldly designed, reminiscent of the industrial age, but infused with a modern sensibility. Bold floor to ceiling windows create inviting interior spaces flooded with light. Efficient floor plans maximize space and accentuate clean lines. A serene common garden on the building’s ground floor adds a bit of charm and greenery, while magnificent views of the Manhattan skyline complete the picture.
		</p>
	</div>
</div>
<?php echo $this->Html->script('box-control'); ?>
<script src="js/jquery.backstretch.min.js"></script>
<script>
boxControl.init({start_up:false});
	$(document).on('ready', function(){
		boxControl.expand();
	});
	 // $('#contentx').backstretch("/img/home-image.jpg");
	 $.backstretch("/img/home-image.jpg");
</script>

