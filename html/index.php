<?php
$pageVars = array(
	'css' => array('den-home','jquery.fullpage.min'),
	'title' => '',
	'js'	=>array('jquery.fullpage.min','jquery.fullpage.extensions.min','fit.min','macy','home')
);
include('header.php');
?>
<main id="content-sections-wrap">
	<section id="intro-section" class="intro section">
		<div class="container branding">
			<div id="intro-bg" class="yellow-bg "></div>
			<h1 class="title"><span class="title-cursive">Denise Nadal</span><br><span class="subtitle">Web Design & Development</span></h1>
			<p class="motto">I love solving problems with good design.<br>
			<a href="#work?type=uiux">UI/UX Design</a>, <a href="#work?type=gd">Graphic Design</a>, <a href="#work?type=dev">Frontend Development</a></p>
		</div>
	</section>
	<section id="about-section" class="about section">
		<div class="container">
			<div class="flex-row outdent">
				<div id="about-branding" class="col5l col4m col0s col0x"></div>
				<div  id="bio-box" class="col7l col8m col12s col12x display-flex flex-vcenter">
					<div class="pad2 white-bg material">
						<figure class="float-right center-text">
							<img src="images/denise-nadal2017.jpg" alt="Photo of Denise Nadal" class="material round">
							<figcaption>This is Denise!</figcaption>
						</figure>
						<h1 class="title h2 card-title">About Denise</h1>
						<p class="top-margin">Hi I’m Denise and I want to make the world a better place through design. I’m passionate about creating beautiful, functional online experiences that are accessible to anyone. Nothing makes me happier than seeing people enjoy using the sites and
							products I’ve built and/or designed.</p>
						<p>As a designer/developer I love being able to take a project from ideation and sketches to a final usable product. I’m working towards becoming a design guru or fullstack developer in the future.</p>
						<h2 class="h3">Likes</h2>
						<ul id="like-list" class="">
							<li>Writing efficient and semantic HTML, CSS, JS & PHP</li>
							<li>Designing intuitive & interactive experiences </li>
							<li>Learning new technologies & frameworks </li>
							<li>Staying organized and To-Do Lists! </li>
							<li>Working on a team! </li>
							<li>Making clients happy </li>
							<li>My 2 beautiful cats!</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section id="work-section" class="work section fp-auto-height">
		<div class="container">
			<h1 class="title section-title no-margin">Work</h1>
			<nav class="section-menu">
				<a href="#work/uiux" data-type="uiux" data-anchor="uiux">UI/UX Design</a>
				<a href="#work/gd" data-type="gd" data-anchor="gd">Graphic Design</a>
				<a href="#work/dev" data-type="dev" data-anchor="dev">Frontend Development</a>
			</nav>
			<section id="uiux" class="works-gallery slide" data-type="uiux" data-anchor="uiux">
				<h2 class="screen-reader-text">UI/UX</h2>
				<div class="row side-outdent">
					<div id="ui-dixie"  class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/dixie-portals/students-portalFINAL.jpg" alt="dixie.edu students homepage and dashboard">
						<h3 class="title3 h4">dixie.edu Web Portals</h3>
						<p class="work-summary">redesigning dashboards for specific user groups with a focus on usability. <br>
						<span class="float-right"><a href="projects/dixie-portals/details?type=uiux">details</a> | <a href="http://students.dixie.edu">live</a></span></p>
					</article>
					</div>
					<div id="strange-horizons" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/strange-horizons/strange_horizons_preview.jpg" alt="Mockups of potential redesign for Strange Horizons magazine">
						<h3 class="title3 h4">Strange Horizons Magazine</h3>
						<p class="work-summary">Hi-fidelity mockups of a potential site redesign <br>
						<span class="float-right"><a href="projects/strange-horizons/details?type=uiux">details</a></span></p>
					</article>
					</div>
					<div id="ui-critiqueit" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/critique-it/critiqueit02.jpg" alt="Example user page for critique it app">
						<h3 class="title3 h4">Critique It</h3>
						<p class="work-summary">UI design for a prototype web app. <br>
						<span class="float-right"><a href="projects/critique-it/details?type=uiux">details</a> | <a href="http://critique-it.herokuapp.com/#/">live version</a></span></p>
					</article>
					</div>
					<div id="ui-personal" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/personal/mockup-intro.jpg" alt="example use of denise nadal's personal branding system">
						<h3 class="title3 h4">Personal Portfolio</h3>
						<p class="work-summary">UI/UX design for this site. <br>
						<span class="float-right"><a href="projects/personal/details?type=uiux">details</a></span></p>
					</article>
					</div>
					<div id="ui-flickerfeed" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/flickr-feed/flickrfeed-desktop-searchresults.png" alt="example search results for flickr feed demo project">
						<h3 class="title3 h4">Flickr Feed Project</h3>
						<p class="work-summary">UI design for simple web app project <br>
						<span class="float-right"><a href="projects/flickr-feed/details?type=uiux">details</a> | <a href="https://flickrfeed.glitch.me/">live demo</a></span></p>
					</article>
					</div>
					<!-- <div id="ui-weefee" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/weefee/weefee-logo-design.png" alt="logo design for weefee app">
						<h3 class="title3 h4">Weefee App</h3>
						<p class="work-summary">UI design for a network pen testing toolkit <br>
						<span class="float-right"><a href="projects/weefee/details?type=uiux">details</a></span></p>
					</article>
				</div> -->
					<div id="uiux-spilker" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/spilker/spilker-branding.jpg" alt="Mockups of digital and print branding for spilker custom homes">
						<h3 class="title3 h4">Spilker Custom Homes Site redesign</h3>
						<p class="work-summary">site design for a local home builder <br>
						<span class="float-right"><a href="projects/spilker/details?type=uiux">details</a> | <a href="http://spilkercustomhomes.com">live</a></span></p>
					</article>
					</div>
					<div id="uiux-campusmaps" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/campus-maps/campusmap-large.png" alt="dixie.edu campus maps page as viewed on a desktop">
						<h3 class="title3 h4">dixie.edu Campus Maps</h3>
						<p class="work-summary">single page web app used to display information about buildings on campus. App is hosted on a customized WordPress template. <br>
						<span class="float-right"><a href="projects/campus-maps/details?type=uiux">details</a> | <a href="https://dixie.edu/campus-maps">live page</a></span></p>
					</article>
					</div>
				</div>
			</section>
			<section id="gd" class="works-gallery slide"  data-type="gd" data-anchor="gd">
				<h2 class="screen-reader-text">Graphic Design</h2>
				<div class="row side-outdent">
					<!-- <div id="gd-itlogo" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img src="" alt="">
						<h3 class="title3 h4">Cat's Logo</h3>
						<p class="work-summary"> <br>
						<span class="float-right"><a href="projects//details?type=gd">details</a></span></p>
					</article>
				</div> -->
					<!-- <div id="gd-weefee" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/weefee/weefee-logo-design.png" alt="logo design for weefee app">
						<h3 class="title3 h4">Weefee App Branding</h3>
						<p class="work-summary">Logo & branding design for a network pen testing toolkit <br>
						<span class="float-right"><a href="projects/weefee/details?type=gd">details</a> </span></p>
					</article>
				</div> -->
					<div id="gd-spilker" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/spilker/spilker-branding.jpg" alt="Mockups of digital and print branding for spilker custom homes">
						<h3 class="title3 h4">Spilker Custom Homes Logo & Branding</h3>
						<p class="work-summary">Logo design for a local home builder <br>
						<span class="float-right"><a href="projects/spilker/details?type=gd">details</a> </span></p>
					</article>
					</div>
					<div id="gd-29muleteam" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/29muleteam-branding/29muleteam-mockup.jpg" alt="Mockup of 29 Mule Team Stationary Set">
						<h3 class="title3 h4">29 Mule Team Business System</h3>
						<p class="work-summary">Imagined redesign of the 29 Mule Team branding <br>
						<span class="float-right"><a href="projects/29muleteam-branding/details?type=gd">details</a> </span></p>
					</article>
					</div>
					<!-- <div id="gd-personal" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/personal/mockup-intro.jpg" alt="example use of denise nadal's personal branding system">
						<h3 class="title3 h4">Personal Branding System</h3>
						<p class="work-summary">Devloping the branding system used for this site. <br>
						<span class="float-right"><a href="projects/personal/details?type=gd">details</a></span></p>
					</article>
				</div> -->
				</div>
			</section>
			<section id="dev" class="works-gallery slide" data-type="dev" data-anchor="dev">
				<h2 class="screen-reader-text">Frontend Development</h2>
				<div class="row side-outdent">
					<div id="dev-critiqueit" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/critique-it/critiqueit02.jpg" alt="Example user page for critique it app">
						<h3 class="title3 h4">Critique-it</h3>
						<p class="work-summary">MEAN stack web app for sharing & critiqueing art <br>
						<span class="float-right"><a href="projects/critique-it/details?type=dev">details</a> | <a href="http://critique-it.herokuapp.com/#/">live</a></span></p>
					</article>
					</div>
					<div id="dev-portals" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/dixie-portals/students-portalFINAL.jpg" alt="dixie.edu students homepage and dashboard">
						<h3 class="title3 h4">dixie.edu Custom WordPress Theme</h3>
						<p class="work-summary">Customized Wordpress theme and templates for use on dixie.edu <br>
						<span class="float-right"><a href="projects/dixie-portals/details?type=dev">details</a> | <a href="https://students.dixie.edu">live version</a></span></p>
					</article>
					</div>
					<div id="dev-tutoring" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/tutoring/tutoring-desktop.png" alt="dixie.edu academic performance & tutoring center's tutoring schedule app as viewed on a desktop">
						<h3 class="title3 h4">dixie.edu Tutoring Center Calendar</h3>
						<p class="work-summary">Single page js-based web app using google calendar's API to dislay tutoring sessions <br>
						<span class="float-right"><a href="projects/tutoring/details?type=dev">details</a> | <a href="https://tutoring.dixie.edu/tutoring-schedule/">live version</a></span></p>
					</article>
					</div>
					<div id="dev-campusmaps" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/campus-maps/campusmap-large.png" alt="dixie.edu campus maps page as viewed on a desktop">
						<h3 class="title3 h4">dixie.edu Campus Maps</h3>
						<p class="work-summary">single page web app using GeoJSON data and the Google Maps API to display information about buildings on campus. App is hosted on a customized WordPress template. <br>
						<span class="float-right"><a href="projects/campus-maps/details?type=dev">details</a> | <a href="https://dixie.edu/campus-maps">live page</a></span></p>
					</article>
					</div>
					<div id="dev-acCal" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/academic-calendar/ac-desktop03.PNG" alt="dixie.edu academic calendar page as viewed on a desktop">
						<h3 class="title3 h4">dixie.edu Academic Calendar</h3>
						<p class="work-summary">single page web app using PHP and JS to load academic calendars and allows users to sort and filter events <br>
						<span class="float-right"><a href="projects/academic-calendar/details?type=dev">details</a> | <a href="https://academics.dixie.edu/academic-calendar">live page</a></span></p>
					</article>
					</div>
					<div id="dev-flickerfeed" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/flickr-feed/flickrfeed-desktop-searchresults.png" alt="example search results for flickr feed demo project">
						<h3 class="title3 h4">Flickr Feed Project</h3>
						<p class="work-summary">A simple web app to search and find images from flickr.com <br>
						<span class="float-right"><a href="projects/flickrfeed/details?type=dev">details</a> | <a href="https://flickrfeed.glitch.me/">live demo</a></span></p>
					</article>
					</div>

				</div>
			</section>
		</div>
	</section>
	<section id="skills-section" class="skills section">
		<div id="skills-container" class="container">
			<div id="skills-inner" class="flex-row flex-wrap outdent">
				<h1 class="title section-title">Skills</h1>
				<section class="skill-set col12x col6s">
					<h2 class="title h3">Web Basics</h2>
					<ul class="skill-list nopad nomargin">
						<li>
							<span class="skill-name h4 title">HTML5</span> <span class="skill-level"><span class="bar"></span> 9</span>
							<span class="screen-reader-text"> out of 10</span>
						</li>
						<li><span class="skill-name h4 title">CSS</span> <span class="skill-level"><span class="bar"></span>9</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">SASS</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">PHP</span> <span class="skill-level"><span class="bar"></span>6</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">WordPress</span> <span class="skill-level"><span class="bar"></span>6</span><span class="screen-reader-text"> out of 10</span></li>
					</ul>
				</section>
				<section class="skill-set col12x col6s">
					<h2 class="title h3">Design Software</h2>
					<ul class="skill-list nopad nomargin">
						<li><span class="skill-name h4 title">Adobe Photoshop</span> <span class="skill-level"><span class="bar"></span>8</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Adobe Illustrator</span> <span class="skill-level"><span class="bar"></span>9</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Adobe InDesign</span> <span class="skill-level"><span class="bar"></span>7</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Sketch</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">InVision</span> <span class="skill-level"><span class="bar"></span>8</span><span class="screen-reader-text"> out of 10</span></li>
					</ul>
				</section>
				<section class="skill-set col12x col6s">
					<h2 class="title h3">Javascript</h2>
					<ul class="skill-list nopad nomargin">
						<li><span class="skill-name h4 title">JS</span> <span class="skill-level"><span class="bar"></span>5</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">jQuery</span> <span class="skill-level"><span class="bar"></span>7</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Angular.js</span> <span class="skill-level"><span class="bar"></span>7</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">React.js</span> <span class="skill-level"><span class="bar"></span>1</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Node.js</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
					</ul>
				</section>
				<section class="skill-set col12x col6s">
					<h2 class="title h3">Designing for Web</h2>
					<ul class="skill-list nopad nomargin">
						<li><span class="skill-name h4 title">Responsive Design</span> <span class="skill-level"><span class="bar"></span>9</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Accessibility</span> <span class="skill-level"><span class="bar"></span>7</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Cross-browser</span> <span class="skill-level"><span class="bar"></span>9</span><span class="screen-reader-text"> out of 10</span></li>
					</ul>
				</section>
				<section class="skill-set col12x col6s">
					<h2 class="title h3">Software Dev</h2>
					<ul class="skill-list nopad nomargin">
						<li><span class="skill-name h4 title">Python</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">Git</span> <span class="skill-level"><span class="bar"></span>6</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">MVC</span> <span class="skill-level"><span class="bar"></span>6</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">OOP</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
					</ul>
				</section>
				<section class="skill-set col12x col6s">
					<h2 class="title h3">Databases</h2>
					<ul class="skill-list nopad nomargin">
						<li><span class="skill-name h4 title">mySQL</span> <span class="skill-level"><span class="bar"></span>6</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">SQLite</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
						<li><span class="skill-name h4 title">MongoDB</span> <span class="skill-level"><span class="bar"></span>4</span><span class="screen-reader-text"> out of 10</span></li>
					</ul>

				</section>
			</div>
		</div>
	</section>
	<section id="experience-section" class="experience section fp-auto-height">
		<div class="container">
			<h1 class="title section-title no-margin">Experience</h1>
			<section id="dsu-fulltime" class="row slide" data-anchor="dsu-web-dd">
				<div class="job_details col7l col7m col6s col12x">
					<h2 class="heading-group">
						<span class="h3 display-block title">Dixie State University</span>
						<span class="h4 display-block">Web Designer & Developer</span>
						<span class="h5 display-block">Design & Development</span>
					</h2>
					<p>Lead designer in charge of developing new themes, templates, designs and layouts in WordPress for use on dixie.edu. Also serves as lead developer after our webmaster, developing web apps and services in php, javascript, jQuery, & Angular and working with REST APIs and databases.</p>

					<p>As designer, pursues user-centered design daily and regularly conducts user testing and monitoring analytics. Develops guides, tutorials, reusable design assets and policies to improve workflow and design consistency. Developed all the content on the <a href="https://webservices.dixie.edu">DSU Web Services website</a></p>

					<p>Works closely with webmaster to train and lead a team of 7-8 junior-level developers and designers as well as organizing team projects. </p>
				</div>
				<div class="job_extras col5l col5m col6s col12x flat-col">
					<div class="white-bg material pad2 right-margin2">
						<img src="projects/dixie-portals/dsu-set.jpg" alt="Employer: Dixie State University" />
							<h3 class="h4">Pages & projects I've developed</h3>
							<ul>
								<li><a href="http://online.dixie.edu">DSU Online</a></li>
								<li><a href="http://students.dixie.edu">DSU Students</a></li>
								<li><a href="http://alumni.dixie.edu">DSU Alumni</a></li>
								<li><a href="http://stem.dixie.edu">STEM @DSU</a></li>
								<li><a href="http://academics.dixie.edu/academic-calendar">Academic Calendar</a></li>
								<li><a href="http://dixie.edu/campus-maps">Campus Maps</a></li>
								<li><a href="http://dixie.edu/calendar">DSU Calendars</a></li>
							</ul>
					</div>
				</div>
			</section>
			<section id="intern-exp" class="row slide" data-anchor="dsu-internship">
				<div class="job_details col7l col7m col6s col12x">
					<h2 class="heading-group">
						<span class="h3 display-block title">Dixie State University</span>
						<span class="h4 display-block">Team Lead/Head Intern</span>
						<span class="h5 display-block">Content Management & Migration</span>
					</h2>
					<p>Led a team of 5 - 8 junior-level web developers in migrating content to a new CMS (Wordpress); creating new content and updating code to HTML5/CSS3 web standards and implementing new branding and style guide.</p>
					<p>Served as a liaison between project managers, clients and the developers, communicating goals, deadlines and identifying issues. Trained new developers in WordPress, following the site style guide, and coding as needed.</p>
					<p>Addressed user feedback and improved UI/UX based on user input. Problem-solving and troubleshooting issues on a daily basis, as well as continually analyzing ways to improve site functionality and UI/UX.</p>
				</div>
				<div class="job_extras col5l col5m col6s col12x flat-col">
					<div class="white-bg material pad2 right-margin2">
						<img src="projects/dixie-portals/dsu-set2.jpg" alt="image of dixie.edu">
						<h3 class="h4">Pages & projects I've developed</h3>
						<ul>
							<li><a href="https://international.dixie.edu/prospective-students/"> International Prospective Students page</a></li>
							<li><a href="https://wrc.dixie.edu">Women's Resource Center site</a></li>
						</ul>
					</div>
				</div>
			</section>
			<section id="spilker-exp" class="row slide" data-anchor="spliker-contract">
				<div class="job_details col7l col7m col6s col12x">
					<h2 class="heading-group">
						<span class="h3 display-block title">Spilker Custom Homes</span>
						<span class="h4 display-block">Site Redesign, SEO & E-Marketing Campaign</span>
					</h2>
					<p>With project partner, Drew Adams, designed and implemented a new clean and modern site targeted towards our client’s target demographic, utilizing user feedback to optimize UI/UX. Implemented onsite and offsite SEO & E-Marketing tactics including optimizing keywords, SERP results, creating infographics, newsletters and youtube videos. Used social media channels to reach target audience and generate leads.</p>
				</div>
				<div class="job_extras col5l col5m col6s col12x flat-col">
					<div class="white-bg material pad2 right-margin2">
						<img src="projects/spilker/spilker-set.jpg" alt="image of Spilker Custom Homes site redesign & rebrand">
					</div>
				</div>
			</section>
		</div>
		<div id="contact-overflow"></div>
	</section>
	<section id="contact-section" class="contact section">
		<div id="contact-bg" class="yellow-bg">	</div>
		<div class="container ">
			<div class="flex-row flex-wrap outdent">
				<!-- TODO add in animation here-->
				<div class="branding col12x col4s col5m col6l">
					<h1 class="title"><span class="title">Contact</span><br><span class="title-cursive">Denise Nadal</span><br><span class="subtitle">Web Design & Development</span></h1>
					<p class="content top-margin">Want to hire me? Send me a message or find me on <a href="https://www.facebook.com/denise.nadal.52">facebook</a>, <a href="https://www.linkedin.com/in/denise-nadal/">linkedin</a>, <a href="https://www.ziprecruiter.com">zipRecruiter</a>, or <a href="https://resumes.indeed.com/resume/d2257fa8f36ba3fd">indeed</a>. You can always email me at <a href="mailto:denise@denisenadal.com">denise@denisenadal.com</a> if you want to chat!</p>
				</div>
				<div class="col12x col8s col7m col6l">
					<!-- TODO add in form processing-->
					<form class="pad2 white-bg material form">
						<h2 class="title-2 card-title no-margin">Message Denise</h2>
						<div class="slim row">
							<div class="slim col6s left-edge"><label for="fullname">Name:</label><input class="left-edge" type="text" name="fullname" id="fullname"></div>
							<div class="slim col6s"><label for="company">Company:</label><input type="text" id="company" name="company"></div>
						</div>
						<div class="slim row">
							<div class="slim col6s left-edge"><label for="emailaddress">E-mail:</label><input class="left-edge" type="email" id="emailaddress" name="emailaddress"></div>
							<div class="slim col6s left-edge"><label for="phonenumber">Telephone:</label> <input type="tel" id="phonenumber" name="phonenumber"></div>
						</div>
						<div class="slim row">
							<div class="slim col12s">
								<p>Preferred Contact Method: <br>
									<input class="left-edge" type="radio" name="perferred-contact" id="email" value="email"><label for="email">Email</label>
									<input type="radio" name="perferred-contact" id="text" value="text"><label for="text">Text</label>
									<input type="radio" name="perferred-contact" id="phone" value="phone"><label for="phone">Phone</label></p>
							</div>
						</div>
						<div class="slim row">
							<div class="slim col12s left-edge">
								<label for="message">Message:</label><br><textarea id="message" name="message"></textarea>
							</div>
						</div>
						<div class="slim row">
							<div class="slim col12s left-edge">
								<input id="contact-form-submit" type="submit" value="Send">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include('footer.php');
