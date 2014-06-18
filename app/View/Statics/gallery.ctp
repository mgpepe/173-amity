<div class="row">
    <div id="aside" class="col-md-3 col-sm-4 col-lg-3">
        <div class="container">

            <?php echo $this->element('header'); ?>

            <div class="row">
                <div class="content">
                    <h1 class="uppercase">Residences</h1>
                    <p class="very-big-bottom">
                        173 Amity perfectly personifies the kind of living that encompasses the uniqueness of Cobble Hill. Interiors feature open, windowed kitchens designed with top- of- the-line appliances. Double bay windows, flexible layouts and home offices are unique to the West line. The East apartments are perfect two bedrooms with exposures on three sides and include a one- of-a kind top floor apartment which has a stairway leading to a private rooftop terrace featuring amazing views over Brooklyn.
                    </p>
                    <button type="button" class="gallery-mobile-features is-futura">
                        FEATURES
                    </button>
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
                <li><a href="" class="left slider-control"></a></li>
                <li><a href="" class="right slider-control"></a></li>
            </ul>
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
                <h3 class="uppercase">RESIDENTIAL FEATURES</h2>
                <ul>
                    <li>Bay windows</li>
                    <li>White ash hardwood floors</li>
                    <li>Video intercom system</li>
                    <li>Interior architecture and design by PKSB</li>
                    <li>Windowed kitchens and master baths</li>
                    <li>Bosch washer/dryer</li>
                    <li>Central heating and air conditioning</li>
                    <li>Private storage</li>
                    <li>Charming landmark street</li>
                </ul>
            </div>
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Kitchen</h2>
                <ul>
                    <li>Custom Alno white gloss lacquer and walnut cabinetry</li>
                    <li>Ceasarstone countertops in blizzard white</li>
                    <li>Glass tile backsplash - gloss finish</li>
                    <li>Bosch dual fuel stainless steel range</li>
                    <li>Fully integrated Bosch dishwasher</li>
                    <li>Hansgrohe "Tails" faucet</li>
                    <li>Dacor microwave drawer</li>
                    <li>"Fabinata" pendant lights by Elgo</li>
                    <li>Garbage disposal</li>
                </ul>
            </div>
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Master bath</h2>
                <ul>
                    <li>Stellar white marble floor and wall tiles, honed finish</li>
                    <li>Alno walnut vanity with double under mounted sinks and Hansgrohe faucets</li>
                    <li>Stellar white marble countertop - honed finish.</li>
                    <li>Frameless glass shower enclosure</li>
                    <li>Recessed medicine cabinets by Robern</li>
                </ul>
            </div>
            <div class="feature very-big-bottom">
                <h3 class="uppercase">Second bath</h2>
                <ul>
                    <li>Lazer marble white wall tiles</li>
                    <li>Pantheon porcelain floor tiles</li>
                    <li>Floating walnut vanity by Alno</li>
                    <li>Hansgrohe faucets</li>
                    <li>Ceaserstone countertop in blizzard white</li>
                    <li>Recessed medicine cabinet by Robern</li>
                </ul>
            </div>
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
            '/img/gallery/1.jpg',
            '/img/gallery/2.jpg',
            '/img/gallery/3.jpg'
            ], {duration: 1000, fade: 300});

        $.backstretch('pause');

        function isMobile() {
            width   = window.innerWidth;
            height = window.innerHeight;

            if(width <= 800 && height <= 640) {
                return true;
            } else if (width <= 600 && height >= 854 && height <= 1024) {
                return true;
            } else {
                return false;
            }
        }

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

            var index = getIndex(3, -1);

            changeCurrentButton(null, index);

            $.backstretch('prev');
        });
        $('.right').click(function(e) {
            e.preventDefault();

            var index = getIndex(3, 1);

            changeCurrentButton(null, index);

            $.backstretch('next');
        });
        // Menu toggle
        menuToggleBtn.on('click', function(e) {
            content.fadeToggle();
            navMenu.fadeToggle();
            logo.fadeToggle(function() {

                if (hidden) {
                    $(e.target).text("VIEW FULL IMAGE");
                    hidden = false;
                    if (isMobile()) {
                        slider.css({
                            'top': '260px'
                        });
                    }

                } else {
                    $(e.target).text('MENU');
                    hidden = true;
                    if (isMobile()) {
                        slider.css({
                            'top': '0'
                        });
                    }
                }
            });
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
