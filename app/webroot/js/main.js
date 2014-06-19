(function() {
	var warningShown = false;
	var warningCont  = $('.legal-warning');

	function toggleLegalWarning() {
		if (warningShown) {
			warningCont.fadeOut();
			warningShown = false;
		} else {
			warningCont.fadeIn();
			warningShown = true;
		}
	}
	$('.legal-notice-btn').on('click', function(e) {
		e.preventDefault();
		toggleLegalWarning();
	});

	$('.warning-button-close').on('click', function() {
		toggleLegalWarning();
	});
})();
