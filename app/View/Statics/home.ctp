<div class="row">
	<div class="col-md-3 col-sm-4 col-lg-3">
		<div class="container">

			<?php echo $this->element('header'); ?>
			
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
	
</div>

<?php echo $this->Html->script('box-control'); ?>
<script src="js/jquery.backstretch.min.js"></script>
<script>
	$(document).on('ready', function(){
        $.backstretch([
            'app/webroot/img/home/1.jpg',
            'app/webroot/img/home/2.jpg',
            'app/webroot/img/home/3.jpg',
            'app/webroot/img/home/4.jpg'
            ], {duration: 1000, fade: 300});

        $.backstretch('pause');

		function changeCurrentButton(element, index) {
			$('.slider-button').removeClass('current');

			if (!element){
				$('.slider-button').eq(index).addClass('current');
			} else {
				$(element).addClass('current');	
			}
			
		}

		function getIndex(nElements, offset) {
			var currentImgSrc = $('.backstretch > img')[0].src,
				currentIndex  = parseInt(currentImgSrc.slice(38, 39)) - 1,
				index;

			if (currentIndex === 0 && offset === -1) {
				index = nElements - 1;
			} else if (currentIndex === nElements - 1 && offset === 1){
				index = 0;
			} else {
				index = currentIndex + offset;
			}

			return index;
		}

		// Buttons
        $('.first').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 0);
            changeCurrentButton(this);
        });
        $('.second').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 1);
            changeCurrentButton(this);
        });
        $('.third').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 2);
            changeCurrentButton(this);
        });
        $('.fourth').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 3);
            changeCurrentButton(this);
        });

		// prev and next controls
		$('.left').click(function(e) {
			e.preventDefault();

			var index = getIndex(4, -1);

			changeCurrentButton(null, index);

			$.backstretch('prev');
		});
		$('.right').click(function(e) {
			e.preventDefault();

			var index = getIndex(4, 1)

			changeCurrentButton(null, index);

            $.backstretch('next');
		});

	});
</script>
