<div class="row">
	<div class="col-md-3 col-sm-4 col-lg-3">
		<div class="container">

			<?php  echo $this->element('header'); ?>
			
				<div class="row">
					<div class="content">
						<h1 class="uppercase bolded eighteen-px">173 amity st.</h1>
						<p class="very-big-bottom">
							Feugiat ante non mattis sceleris- que. Suspendisse eu nisl venenatis nisi fermentum vestibulum. Donec pretium adipiscing orci, eu sagittis ipsum. Ut at venenatis odio. Sus- pendisse ac felis ut nulla accumsan tincidunt. Mauris sagittis rhoncus erat, non semper nisi mollis vitae. Aenean gravida ultrices libero vitae blandit. Etiam dignissim vel metus congue rutrum. Maecenas massa justo. Ut at venenatis odio. Suspendisse ac felis ut nulla accumsan tincidunt.
						</p>

						<div class="slider">
							<p class="uppercase">Click to view <br> more images</p>
							<ul class="controls">
								<li><a href="" class="first slider-button current"></a></li>
								<li><a href="" class="second slider-button"></a></li>
								<li><a href="" class="third slider-button"></a></li>
								<li><a href="" class="fourth slider-button"></a></li>
								<li><a href="" class="left slider-control"></a></li>
								<li><a href="" class="right slider-control"></a></li>
							</ul>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="col-md-3 col-sm-4 col-lg-3">
	content
	</div>
	
</div>

<?php echo $this->Html->script('box-control'); ?>
<script src="js/jquery.backstretch.min.js"></script>
<script>
	$(document).on('ready', function(){
		$.backstretch("/img/home/1.jpg");

		function changeCurrent(element) {
			$('.slider-button').removeClass('current');
			$(element).addClass('current');
		}

		function changeCurrentTwo(direction) {
			$('.slider-button').removeClass('current');
			$('.slider-button').eq(direction).addClass('current');
		}

		function getIndex(nElements, offset) {
			var currentImgSrc = $('.backstretch > img')[0].src,
				currentIndex  = parseInt(currentImgSrc.slice(26, 27)),
				index;

			if (currentIndex === 1 && offset === -1) {
				index = nElements;
			} else if (currentIndex === nElements && offset === 1){
				index = 1;
			} else {
				index = currentIndex + offset;
			}

			return index;
		}

		// Buttons
		$('.first').click(function(e) {
			e.preventDefault();
			$.backstretch('/img/home/1.jpg');
			changeCurrent(this);
		});
		$('.second').click(function(e) {
			e.preventDefault();
			$.backstretch('/img/home/2.jpg');
			changeCurrent(this);
		});
		$('.third').click(function(e) {
			e.preventDefault();
			$.backstretch('/img/home/3.jpg');
			changeCurrent(this);
		});
		$('.fourth').click(function(e) {
			e.preventDefault();
			$.backstretch('/img/home/4.jpg');
			changeCurrent(this);
		});
		// prev and next controls
		$('.left').click(function(e) {
			e.preventDefault();
			var index = getIndex(4, -1),
				path  = '/img/home/' + index + '.jpg';
			changeCurrentTwo(index - 1);
			$.backstretch(path);
		})
		$('.right').click(function(e) {
			e.preventDefault();
			var index = getIndex(4, 1),
				path  = '/img/home/' + index + '.jpg';
			changeCurrentTwo(index - 1);
			$.backstretch(path);
		})

	});
</script>
