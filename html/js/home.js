var worksMacy;



jQuery(document).ready(function($) {	
	//init the page scroller
	$('#content-sections-wrap').fullpage({
		licenseKey:'8E3DF562-885C4E1C-BF04331E-5E335FCF',
		//Navigation
		menu: '#main-menu',
		navigation: false,
		anchors: ['intro', 'about', 'work', 'experience', 'contact'],
		slidesNavigation: true,
		slidesNavPosition: 'bottom',

		//Scrolling
		css3: true,
		scrollingSpeed: 800,
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
		afterLoad: function(anchorLink, i) {
			//hide logo on contact screen
			hideNavLogo();
			$('#main-header').stop(true, false).delay(400).fadeIn(1200);
		},
		//exit a slide
		onLeave: function (index, nextIndex, direction) {

			$('#main-header').stop(true, false).fadeOut(200);
		},
		afterSlideLoad: function(anchorLink, index, slideAnchor, slideIndex) {
		},
		//after leaving a slide
		onSlideLeave: function(anchorLink, index, slideIndex, direction, nextSlideIndex) {
		}
		
	});
});

function setActiveGallery() {
	$('.works-gallery').removeClass('active');

	var hash = window.location.hash;
	if (hash !== '#work/uiuxgallery2' ) {
		hash = '#work/uiuxgallery1'
	}
	$('#work-section .section-menu a[href="' + hash + '"]').addClass('active');

	if ($('#menu-icon').is(":visible")) {
		resizeWorksGallery();
	}
	return;
}

function resizeWorksGallery(){
	//fix work container hieght
	var active_height = $('#work-section .works-gallery.active .row').innerHeight();
	$('#work-section .fp-slidesContainer').css('height',active_height+'!important');
}

function hideNavLogo(){
		//hide logo if on intro or contact page
	if ($('.section.intro, .section.contact').hasClass('active')) {
		$('#logo-link').css('visibility', 'hidden');
	}
	 else {
				$('#logo-link').css('visibility', 'visible');
			}
}

function sectionMenuClickHandler(){
	//show active gallery indicator on click
	$('.section-menu a').click(function () {
		$('.section-menu a').removeClass('active');
		$(this).addClass('active');
	});
}

function pageInit (){
	hideNavLogo();
	sectionMenuClickHandler();

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