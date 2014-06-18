<div class="row">
	<div class="col-md-3 col-sm-4 col-lg-3">
		<div class="container">

			<?php echo $this->element('header'); ?>

				<div class="row">
					<div class="content">
						<div class="stuff">
							<h1 class="uppercase heading">173 Amity st.</h1>
							<p class="very-big-bottom">
								173 Amity, located in Historic Cobble Hill at the corner of Clinton and Amity Street, is a magnificent four-story limestone building built in 1900. The historic quality of the majestic exterior combined with the elegance of the interior design by PKSB Architects makes 173 Amity Street a rare find. Serene and private, the building features only two homes per floor, each containing two to three bedrooms. The spacious living and dining areas feature beautiful bay windows over- looking an intimate tree-lined street made up of 19th century architecture.
							</p>
						</div>
					</div>
				</div>
		</div>
	</div>
	<div class="col-md-3">
		<div class="slider">
			<button type="button" id="toggle-menu">VIEW FULL IMAGE</button>
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

<script src="js/jquery.backstretch.min.js"></script>
<script>
	$(document).on('ready', function(){
		var menuToggleBtn = $('#toggle-menu'),
            logo          = $('#logo'),
            slider        = $('.slider'),
            content       = $('.content'),
            navMenu       = $('.nav-list'),
            hidden        = false;

        $.backstretch([
            '/img/home/1.jpg',
            '/img/home/2.jpg',
            '/img/home/3.jpg',
            '/img/home/4.jpg'
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
				currentIndex  = currentImgSrc.slice(-5),
                currentImgIndex = currentIndex.slice(0,1) - 1,
				index;

			if (currentImgIndex === 0 && offset === -1) {
				index = nElements - 1;
			} else if (currentImgIndex === nElements - 1 && offset === 1){
				index = 0;
			} else {
				index = currentImgIndex + offset;
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

			var index = getIndex(4, 1);

			changeCurrentButton(null, index);

            $.backstretch('next');
		});

        // Menu toggle
        menuToggleBtn.on('click', function(e) {
            content.fadeToggle();
            navMenu.fadeToggle();
            logo.fadeToggle();
                if (hidden) {
                    $(e.target).text("VIEW FULL IMAGE");
                    hidden = false;
                    slider.css({
                        'top': '260px'
                    });
                } else {
                    $(e.target).text('MENU');
                    hidden = true;
                    slider.css({
                        'top': '0px'
                    });
                }
        });

	});
</script>
