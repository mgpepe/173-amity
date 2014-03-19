<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-4 col-lg-3">
            <div class="container">

                <div class="row">
                    <div id="logo" class="small-bottom">
                        <img src="/img/logo.jpg" alt="logo" class="img-responsive">
                    </div>
                </div>

                <div class="row">
                    <nav id="header" role="navigation">
                        <!-- Dirty hack to detect mobile collapse and kill hover -->
                        <div id="js-detect-mobile-collapse" class="visible-xs"></div>

                        <ul class="nav-list no-margin small-bottom">
                            <li class="<?php if ($page=='home') echo 'active'; ?>"><a class="uppercase menued "  href="/">Home</a></li>
                            <li class="<?php if ($page=='gallery') echo 'active'; ?>"><a class="uppercase menued "  href="/gallery">Gallery</a></li>
                            <li class="<?php if ($page=='neighborhood') echo 'active'; ?>"><a class="uppercase menued "  href="/neighborhood">Neighborhood</a></li>
                            <li class="<?php if ($page=='availability') echo 'active'; ?>"><a class="uppercase menued "  href="/availability">Availability</a></li>
                            <li class="<?php if ($page=='team') echo 'active'; ?>"><a class="uppercase menued "  href="/team">Team</a></li>
                            <li class="<?php if ($page=='contact') echo 'active'; ?>"><a class="uppercase menued "  href="/contact">Contact</a></li>
                            <li class="<?php if ($page=='press') echo 'active'; ?>"><a class="uppercase menued "  href="/press">Press</a></li>
                        </ul>
                    </nav>
                </div>

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
</div>

<?php echo $this->Html->script('box-control'); ?>
<script src="js/jquery.backstretch.min.js"></script>
<script>
    $(document).on('ready', function(){
        $.backstretch("/img/gallery/1.jpg");

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

        // Buttons
        $('.first').click(function(e) {
            e.preventDefault();
            $.backstretch('/img/gallery/1.jpg');
            changeCurrent(this);
        });
        $('.second').click(function(e) {
            e.preventDefault();
            $.backstretch('/img/gallery/2.jpg');
            changeCurrent(this);
        });
        $('.third').click(function(e) {
            e.preventDefault();
            $.backstretch('/img/gallery/3.jpg');
            changeCurrent(this);
        });
        $('.fourth').click(function(e) {
            e.preventDefault();
            $.backstretch('/img/gallery/4.jpg');
            changeCurrent(this);
        });
        $('.fifth').click(function(e) {
            e.preventDefault();
            $.backstretch('/img/gallery/5.jpg');
            changeCurrent(this);
        })
        // prev and next controls
        $('.left').click(function(e) {
            e.preventDefault();

            var index = getIndex(5, -1),
                path  = '/img/gallery/' + index + '.jpg';

            changeCurrentTwo(index - 1);
            
            $.backstretch(path);
        })
        $('.right').click(function(e) {
            e.preventDefault();

            var index = getIndex(5, 1),
                path  = '/img/gallery/' + index + '.jpg';

            changeCurrentTwo(index - 1);

            $.backstretch(path);
        })

    });
</script>
