	<div class="grey-liner">
		<div class="container ">
			<div class=" nav-floorplans">
				<a href="/floorplans/1a" class="<?php if ($subpage=='1a') echo 'active'; ?> unavailable ">1A</a>
				<a href="/floorplans/1b" class="<?php if ($subpage=='1b') echo 'active'; ?> available ">1B</a>
				<a href="/floorplans/2"  class="<?php if ($subpage=='2') echo 'active'; ?> unavailable">2</a>
				<a href="/floorplans/3a" class="<?php if ($subpage=='3a') echo 'active'; ?> unavailable">3A</a>
				<a href="/floorplans/3b" class="<?php if ($subpage=='3b') echo 'active'; ?> available">3B</a>
				<a href="/floorplans/4a" class="<?php if ($subpage=='4a') echo 'active'; ?> available">4A</a>
				<a href="/floorplans/4b" class="<?php if ($subpage=='4b') echo 'active'; ?> available">4B</a>
				<a href="/floorplans/roof" class="<?php if ($subpage=='roof') echo 'active'; ?> available">ROOF CABANAS</a>
				<a href="/floorplans/storage" class="<?php if ($subpage=='storage') echo 'active'; ?> available">STORAGE</a>
			</div>
		</div>
	</div>
<script>
	$('.unavailable').on('click', function(){return false;})
</script>