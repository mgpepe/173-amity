
<div class="row">
	<div id="logo" class="small-bottom">
		<img src="app/webroot/img/logo.jpg" alt="logo" class="img-responsive">
	</div>
</div>

<div class="row">
	<nav id="header" role="navigation">
		<!-- Dirty hack to detect mobile collapse and kill hover -->
		<div id="js-detect-mobile-collapse" class="visible-xs"></div>

		<ul class="nav-list no-margin small-bottom">
			<li class="<?php if (isset($isHome)) echo 'active'; ?>"><a class="uppercase menued "  href="/">Home</a></li>
			<li class="<?php if (isset($isHome) ) echo 'active'; ?>"><a class="uppercase menued "  href="/gallery">Gallery</a></li>
			<li class="<?php if (isset($isHome) ) echo 'active'; ?>"><a class="uppercase menued "  href="/neighborhood">Neighborhood</a></li>
			<li class="<?php if (isset($isAvailability) ) echo 'active'; ?>"><a class="uppercase menued "  href="/availability">Availability</a></li>
			<li class="<?php if (isset($isHome) ) echo 'active'; ?>"><a class="uppercase menued "  href="/team">Team</a></li>
			<li class="<?php if (isset($isContacts) ) echo 'active'; ?>"><a class="uppercase menued "  href="/contacts">Contact</a></li>
			<li class="<?php if (isset($isHome) ) echo 'active'; ?>"><a class="uppercase menued "  href="/press">Press</a></li>
    	</ul>
	</nav>
</div>