//================  main menu MOBILE  ======================//

$('#menu-icon').click(function() {
	$('#menu-icon').toggleClass('closed open');
	if ($('#menu-icon').hasClass('open')) {
		$('#main-menu').css('display', 'flex');
	} else {
		$('#main-menu').hide();
	}

});

$('#main-menu a').click(function(e) {
	if ($('#menu-icon').is(":visible")) {
		$('#main-menu').hide();
		$('#menu-icon').toggleClass('closed open');

	}
});




