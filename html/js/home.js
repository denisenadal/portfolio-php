//================  home page init ======================//
jQuery(document).ready(function ($) {
	//init the page scroller
	$('#content-sections-wrap').fullpage({
		licenseKey: '8E3DF562-885C4E1C-BF04331E-5E335FCF',
		//Navigation
		menu: '#main-menu',
		navigation: false,
		anchors: ['intro', 'about', 'work', 'experience', 'contact'],
		slidesNavigation: true,
		slidesNavPosition: 'bottom',

		//Scrolling
		css3: true,
		scrollingSpeed: 400,
		autoScrolling: true,
		fitToSection: true,
		fitToSectionDelay: 1000,
		scrollBar: true,
		scrollHorizontally: false,
		// scrollOverflow: true,
		easingcss3: 'ease-in-out',
		fadingEffect: true,
		bigSectionsDestination: 'top',
		normalScrollElements: '.work',

		//Accessibility
		keyboardScrolling: true,
		animateAnchor: true,
		recordHistory: true,
		dragAndMove: 'vertical',

		//Design
		paddingTop: '4rem',
		paddingBottom: '4rem',
		fixedElements: '#main-header',
		responsiveWidth: 768,
		responsiveHeight: 420,
		responsiveSlides: true,

		lazyLoading: true,

		//events

		//DOM is ready
		afterRender: function () {
			pageInit();
		},
		//after sections load
		afterLoad: function (prev, next) {
			toggleMenus(next);
		}
		// //exit a 
		// onLeave: function (index, nextIndex, direction) {

		// },
		// afterSlideLoad: function (anchorLink, index, slideAnchor, slideIndex) {
		// },
		// //after leaving a slide
		// onSlideLeave: function (anchorLink, index, slideIndex, direction, nextSlideIndex) {
		// }

	});
});

//================  contact form  ======================//
$('#contact-section form').on('submit', function (event) {
	event.preventDefault();
	$.ajax({
		url: "contact-form.php",
		method: "POST",
		data: $(this).serialize(),
		dataType: 'text',
		contentType: 'application/x-www-form-urlencoded'
	}).done(function (resp) {
		$('#contact-section form').html('<h2 class="title-2 card-title no-margin">' + resp.status + '</h2><div class="row"><div class="col12s">' + resp.message + '</div></div>');
	});
});

//================  home animation functions  ======================//
function atTopOfSection(){
	var offset = $('.fp-section.active').offset();
	return (Math.abs(window.scrollY - offset.top) < 5);
}

function toggleMenus(next){
	var anchor = next.anchor;
	$('#main-menu a').removeClass('active');
	$('#main-menu a[data-menuanchor="' + anchor + '"]').addClass('active');

	if (next.anchor === "contact" || next.anchor === "intro" ){
		$('#logo-link').css('visibility', 'hidden');
	}
	else {
		$('#logo-link').css('visibility', 'visible');
	}


}

function mainMenuHandlers() {
	if (window.innerWidth <= 768 ){
		return;
	}
	
	$(window).scroll($.debounce(250, true, function () {
		$('#main-header').stop(true, false).fadeOut(200);

	}));

	$(window).scroll($.debounce(250, function () {
		if (atTopOfSection() ){
			$('#main-header').stop(true, false).delay(400).fadeIn(800);
		}		
	}));
}

function pageInit() {
	mainMenuHandlers();
	macyWrapper('#uiuxgallery1 .row');
	macyWrapper('#uiuxgallery2 .row');

	$('#contact-section form').on('submit', function (event) {
		event.preventDefault();
		$.ajax({
			url: "contact-form.php",
			method: "POST",
			data: $(this).serialize(),
			dataType: 'text',
			contentType: 'application/x-www-form-urlencoded'
		}).done(function (resp) {
			$('#contact-section form').html('<h2 class="title-2 card-title no-margin">' + resp.status + '</h2><div class="row"><div class="col12s">' + resp.message + '</div></div>');
		});
	});
};
