<div class="row">
    <div id="aside" class="col-md-3 col-sm-4 col-lg-3">
        <div class="container">

            <?php echo $this->element('header'); ?>

            <div class="row">
                <div class="content">
                    <h1 class="uppercase">residences</h1>
                    <p class="very-big-bottom">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, magnam, fugit mollitia natus aliquid aliquam necessitatibus aut vitae dolor deserunt perspiciatis non ullam voluptatum fuga quam? Distinctio consequatur nemo earum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, voluptatibus similique error vel sint fugit beatae quod sapiente animi vero voluptate quasi deserunt veritatis provident aliquid. Numquam, corporis fuga suscipit.
                    </p>
                    <button type="button" class="gallery-mobile-features is-futura">
                        FEATURES
                    </button>
                    <div class="slider">
                        <p class="uppercase">Click to view <br> more images</p>
                        <ul class="controls">
                            <li><a href="" class="first slider-button current"></a></li>
                            <li><a href="" class="second slider-button"></a></li>
                            <li><a href="" class="third slider-button"></a></li>
                            <li><a href="" class="left slider-control"></a></li>
                            <li><a href="" class="right slider-control"></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div>
    <div class="features-button-open side-btn"></div>
    <div id="main-f-window" class="features-window display-none">
        <div class="features-button-close"><span class="uppercase small-font">
            close
        </span></div>
        <div class="features">
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Main spaces</h2>
                <ul>
                    <li>Bay windows</li>
                    <li>White ash hardwood floors</li>
                    <li>Video intercom system</li>
                    <li>interior architecture and design by PKSB</li>
                    <li>Windowed kitchens and master baths</li>
                    <li>Bosch washer/dryer</li>
                    <li>Central heating and AC</li>
                    <li>Private storage</li>
                    <li>Charming landmark street</li>
                </ul>
            </div>
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Kitchens</h2>
                <ul>
                    <li>Custom Alno white gloss lacquerand walnut cabinetry</li>
                    <li>Ceasarstone countertops in blizzard white</li>
                    <li>Glass tile backsplash - gloss finish</li>
                    <li>Bosch dual fuel stainless steel range</li>
                    <li>36" French door stainless steel Bosch refrigerator</li>
                    <li>Fully integrated Bosch dishwasher</li>
                    <li>Hansgrobe "Tails" faucet</li>
                    <li>Dacor microwave drawer</li>
                    <li>"Fabinata" pendant lights by Elgo</li>
                    <li>Garbage disposal</li>
                </ul>
            </div>
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Master bath</h2>
                <ul>
                    <li>Carrara porcelain wall and floor tiles</li>
                    <li>Alno walnut vanity with double under mounted sinks and Hansgrobe faucets</li>
                    <li>Stellar white marble countertop. Honed finish.</li>
                    <li>Frameless glass shower enclosure</li>
                    <li>Recessed medicine cabinets by Robern</li>
                </ul>
            </div>
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Second bath</h2>
                <ul>
                    <li>Lazar marble white wall tiles</li>
                    <li>Pantheon porcelain floor tiles</li>
                    <li>Floating walnut vanity by Alno</li>
                    <li>Hansgrohe faucets</li>
                    <li>Ceaserstone countertop in blizzard white</li>
                    <li>Recessed medicine cabinet by Robem</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<script src="js/jquery.backstretch.min.js"></script>
<script>
    $(document).on('ready', function(){
        $.backstretch([
            '/img/gallery/1.jpg',
            '/img/gallery/2.jpg',
            '/img/gallery/3.jpg'
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
        // prev and next controls
        $('.left').click(function(e) {
            e.preventDefault();

            var index = getIndex(5, -1);

            changeCurrentButton(null, index);

            $.backstretch('prev');
        });
        $('.right').click(function(e) {
            e.preventDefault();

            var index = getIndex(5, 1);

            changeCurrentButton(null, index);

            $.backstretch('next');
        });

        // Feautures window
        function toggleFeaturesWindow() {
            var featuresW = $('.features-window');

            featuresW.fadeToggle('fast', 'linear',function() {
                featuresW.toggleClass('display-none');
            });
        }

        $('.features-button-open').on('click', function(e) {
            e.preventDefault();
            toggleFeaturesWindow();
        });
        $('.features-button-close').on('click', function(e) {
            e.preventDefault();
            toggleFeaturesWindow();
        });
        $('.gallery-mobile-features').on('click', function(e) {
            e.preventDefault();
            toggleFeaturesWindow();
        });

    });
</script>
