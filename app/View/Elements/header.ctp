
<div class="row">
	<div id="logo" class="small-bottom">
		<a href="/"><img src="/img/logo.jpg" alt="logo" class="img-responsive"></a>
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
</div>

<div class="row">
	<div class="navbar-collapse collapse" id="header" role="navigation">
		<!-- Dirty hack to detect mobile collapse and kill hover -->
		<!-- <div id="js-detect-mobile-collapse" class="visible-xs"></div> -->
		<ul class="nav-list no-margin small-bottom">
			<li class="<?php if (isset($isHome)) echo 'active'; ?>"><a class="uppercase "  href="/">Home</a></li>
			<li class="<?php if (isset($isGallery) ) echo 'active'; ?>"><a class="uppercase  "  href="/gallery">Gallery</a></li>
			<li class="<?php if (isset($isNeighborhood) ) echo 'active'; ?>"><a class="uppercase "  href="/neighborhood">Neighborhood</a></li>
			<li class="<?php if (isset($isAvailability) ) echo 'active'; ?>"><a class="uppercase "  href="/availability">Availability</a></li>
			<li class="<?php if (isset($isTeam) ) echo 'active'; ?>"><a class="uppercase "  href="/team">Team</a></li>
			<li class="<?php if (isset($isContacts) ) echo 'active'; ?>"><a class="uppercase "  href="/contacts">Contact</a></li>
			<li class="<?php if (isset($isPress) ) echo 'active'; ?>"><a class="uppercase "  href="/press">Press</a></li>
		</ul>
	</div>
</div>
