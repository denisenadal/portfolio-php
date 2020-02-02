//================  main menu  ======================//

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

//================  macy gallery  ======================//
function macyWrapper(selector, cols, callback) {
	if (cols === undefined) {
		var cols = {
			hd: 4,
			sd: 3,
			tablet: 2,
			mobile: 1
		};
	}
	var macyInstance = Macy({
		container: selector,
		trueOrder: false,
		waitForImages: false,
		margin: 0,
		columns: cols.hd,
		breakAt: {
			1200: cols.sd,
			996: cols.tablet,
			768: cols.mobile
		}
	});

	if (callback !== undefined) {
		callback();
	}

	return macyInstance;

}

Macy.prototype.denMacyResizeColumn = function(selector, sizes, scale) {
	this.on(this.constants.EVENT_RESIZE, function(ctx) {
		var resize = false;
		if (sizes.indexOf('hd') > -1 && ($(window).width() > 1199)) {
			resize = true;
		}
		if (sizes.indexOf('sd') > -1 && ($(window).width() < 1200 && $(window).width() >= 996)) {
			resize = true;
		}
		if (sizes.indexOf('tablet') > -1 && ($(window).width() < 996 && $(window).width() >= 768)) {
			resize = true;
		}
		if (sizes.indexOf('mobile') > -1 && $(window).width() < 768) {
			resize = true;
		}
		if (resize) {
			var rule = $(selector)[0].style.width;
			var PercentPattern = /\d+\.?\d*(?=%)/;
			var percent = PercentPattern.exec(rule);
			if (typeof percent === "object") {
				percent = parseInt(percent[0]) * scale;
				$(selector).css("width", "calc(" + percent.toString() + "% + 0px)");
			}
		}

	});
}

