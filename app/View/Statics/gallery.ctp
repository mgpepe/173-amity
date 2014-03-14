<div class="row">
    <div class="col-md-3 col-sm-4 col-lg-3">
        <div class="container">

            <?php  echo $this->element('header'); ?>

            <div class="row">
                <div class="content">
                    <h1 class="uppercase bolded eighteen-px">residences</h1>
                    <p class="very-big-bottom">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, magnam, fugit mollitia natus aliquid aliquam necessitatibus aut vitae dolor deserunt perspiciatis non ullam voluptatum fuga quam? Distinctio consequatur nemo earum.
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, voluptatibus similique error vel sint fugit beatae quod sapiente animi vero voluptate quasi deserunt veritatis provident aliquid. Numquam, corporis fuga suscipit.
                    </p>

                    <div class="slider">
                        <p class="uppercase">Click to view <br> more images</p>
                        <ul class="controls">
                            <li><a href="" class="first slider-button current"></a></li>
                            <li><a href="" class="second slider-button"></a></li>
                            <li><a href="" class="third slider-button"></a></li>
                            <li><a href="" class="fourth slider-button"></a></li>
                            <li><a href="" class="fifth slider-button"></a></li>
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
    <div class="features-button-open"></div>
    <div class="features-window display-none">
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
                    <li>Ceaserstone countertop in blizzard white</li>
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
            'app/webroot/img/gallery/1.jpg',
            'app/webroot/img/gallery/2.jpg',
            'app/webroot/img/gallery/3.jpg',
            'app/webroot/img/gallery/4.jpg',
            'app/webroot/img/gallery/5.jpg'
            ], {duration: 1000, fade: 750});

        $.backstretch('pause');

        function changeCurrent(element) {
            $('.slider-button').removeClass('current');

            $(element).addClass('current');
        }

        function changeCurrentTwo(direction) {
            $('.slider-button').removeClass('current');

            $('.slider-button').eq(direction - 1).addClass('current');
        }

        function getIndex(nElements, offset) {
            var currentImgSrc = $('.backstretch > img')[0].src,
                currentIndex  = parseInt(currentImgSrc.slice(29, 30)),
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

        function toggleFeaturesWindow() {
            var featuresW = $('.features-window');

            featuresW.fadeToggle('fast', 'linear',function() {
                featuresW.toggleClass('display-none');
            })
        }

        // Buttons
        $('.first').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 0);
            changeCurrent(this);
        });
        $('.second').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 1);
            changeCurrent(this);
        });
        $('.third').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 2);
            changeCurrent(this);
        });
        $('.fourth').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 3);
            changeCurrent(this);
        });
        $('.fifth').click(function(e) {
            e.preventDefault();
            $.backstretch('show', 4);
            changeCurrent(this);
        })
        // prev and next controls
        $('.left').click(function(e) {
            e.preventDefault();

            var index = getIndex(5, -1),
                path  = '/img/gallery/' + index + '.jpg';


            $.backstretch('prev');
        })
        $('.right').click(function(e) {
            e.preventDefault();

            var index = getIndex(5, 1),
                path  = '/img/gallery/' + index + '.jpg';

            $.backstretch('next');
        })

        $('.features-button-open').on('click', function(e) {
            e.preventDefault();
            toggleFeaturesWindow();
        })
        $('.features-button-close').on('click', function(e) {
            e.preventDefault();
            toggleFeaturesWindow();
        })

    });
</script>
