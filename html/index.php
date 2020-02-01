<?php
$pageVars = array(
	'css' => array('den-home','jquery.fullpage.min'),
	'title' => '',
	'js'	=>array('scrolloverflow.min','jquery.fullpage.min','jquery.fullpage.extensions.min','fit.min','macy','home')
);
include('header.php');
?>
<main id="content-sections-wrap">
	<section id="intro-section" class="intro section">
		<div class="container branding">
			<div id="intro-bg"></div>
			<h1 class="title"><span class="title-cursive">Denise Nadal</span><br><span class="subtitle">Product & Design</span></h1>
			<p class="motto">I love solving problems and helping people through good design
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
						<h1 class="title h2 cursive">About Denise</h1>
						<p class="top-margin">Hi I'm Denise and I want to make the world a better place through design. I'm passionate about creating beautiful, delightful, and functional experiences that are accessible to anyone. Nothing makes me happier than seeing people enjoy using the sites and products I've built and designed.</p>
                        <p>I started my career in design as a freelance Illustrator, pivoted into Web Development, and dipped my toes in Front-end Engineering. Now I'm focusing on UX Design and Product Management because I'm happiest when I'm thinking about how to deliver value to customer and designing solutions that are functional, feasible and delightful. </p>
                        
                        <p>I'm always open to learning about new opportunities to grow.</p>
						<h2 class="h3">Likes</h2>
						<ul id="like-list" class="">
                            <li>Designing intuitive & interactive experiences </li>
                            <li>Blending business value with customer satisfaction</li>
                            <li>Analyzing how people use products and services</li>
							<li>Designing better workflows for users and teams</li>
							<li>Learning new technologies, techniques & skills </li>
							<li>Staying organized and To-Do Lists! </li>
							<li>Making users happy </li>
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
				<a href="#work/uiux" data-type="uiux" data-anchor="uiux">2018 - current</a>
				<a href="#work/uiux2" data-type="uiux2" data-anchor="uiux2">2016 - 2018</a>
			</nav> 
			<section id="uiux" class="works-gallery slide" data-type="uiux" data-anchor="uiux">
				<h2 class="screen-reader-text">2018 - current</h2>
				<div class="row side-outdent">
                    <div id="ui-pm-home-maintenance" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/pm-home-maintenance/pitchDeck-Title.png" alt="design for subscription home maintenance service">
                            <h3 class="title3 h4 top-margin">Home Maintenance Service</h3>
                            <p class="work-summary">Product Exploration, Market & UX Research Project to identify new product opportunities to help homeowners avoid problems with home service contractors<br>
                            <span class="float-right"><a href="projects/pm-home-maintenance/details.php?type=uiux">details</a></span></p>
                        </article>
                    </div> 
					<div id="ui-pm-ux-research" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/pm-ux-research/system-map.jpg" alt="Creating a mental map of our users and the ecosystem">
                            <h3 class="title3 h4 top-margin">A Day in the Life</h3>
                            <p class="work-summary">What is it like to work for an HVAC company as a technician? or a dispatcher? What does your day look like? How do you run a maintenance, repair or install job? <br>
                            <span class="float-right"><a href="projects/pm-ux-research/details.php?type=uiux">details</a></span></p>
                        </article>
                    </div> 
					<div id="ui-pm-customer-summary" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/pm-customer-summary/summary-cover.png" alt="Design exploration for job and customer screens in the Pointman App">
                            <h3 class="title3 h4 top-margin">Job & Customer Screens</h3>
                            <p class="work-summary">Ongoing design improvements to critical screens in the Pointman app. <br>
                            <span class="float-right"><a href="projects/pm-customer-summary/details.php?type=uiux">details</a></span></p>
                        </article>
                    </div> 
                    <div id="ui-pm-tech-exp" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/pm-tech-exp/v03jobinfo-mobile.png" alt="logo design for pm-tech-exp app">
                            <h3 class="title3 h4 top-margin">Guided User Experiences</h3>
                            <p class="work-summary">Designing a new UI to create intuitive guided workflows so CSR's can schedule work faster and techs can complete jobs faster.<br>
                            <span class="float-right"><a href="projects/pm-tech-exp/details.php?type=uiux">details</a></span></p>
                        </article>
					</div> 
					<div id="ui-pm-reporting" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/pm-reporting/report-cover2.png" alt="logo design for pm-reporting app">
                            <h3 class="title3 h4 top-margin">Reporting Dasboards</h3>
                            <p class="work-summary">UI design for various business reporting dashboards for HVAC business owners <br>
                            <span class="float-right"><a href="projects/pm-reporting/details.php?type=uiux">details</a></span></p>
                        </article>
                    </div> 
                    <div id="ui-pm-iq" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/pm-iq/iq-cover.png" alt="quote presentation design">
                            <h3 class="title3 h4 top-margin">Job Quote & Invoicing System</h3>
                            <p class="work-summary">UI/UX design a new way to build customizable invoices & quotes. <br>
                            <span class="float-right"><a href="projects/pm-iq/details.php?type=uiux">details</a></span></p>
                        </article>
                    </div> 


				</div>
            </section>
            <section id="uiux2" class="works-gallery slide" data-type="uiux2" data-anchor="uiux2">
				<h2 class="screen-reader-text">2016 - 2018</h2>
				<div class="row side-outdent">
					<div id="ui-dixie"  class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/dixie-portals/students-portalFINAL.jpg" alt="dixie.edu students homepage and dashboard">
                            <h3 class="title3 h4 top-margin">dixie.edu Web Portals</h3>
                            <p class="work-summary">redesigning dashboards for specific user groups with a focus on usability. <br>
                            <span class="float-right"><a href="projects/dixie-portals/details.php?type=uiux">details</a> | <a href="http://students.dixie.edu">live</a></span></p>
                        </article>
					</div>
					<div id="strange-horizons" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/strange-horizons/strange_horizons_preview.jpg" alt="Mockups of potential redesign for Strange Horizons magazine">
                            <h3 class="title3 h4 top-margin">Strange Horizons Magazine</h3>
                            <p class="work-summary">Hi-fidelity mockups of a potential site redesign <br>
                            <span class="float-right"><a href="projects/strange-horizons/details.php?type=uiux">details</a></span></p>
                        </article>
					</div>
					<div id="ui-critiqueit" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/critique-it/critiqueit02.jpg" alt="Example user page for critique it app">
                            <h3 class="title3 h4 top-margin">Critique It</h3>
                            <p class="work-summary">UI design for a prototype web app. <br>
                            <span class="float-right"><a href="projects/critique-it/details.php?type=uiux">details</a> | <a href="http://critique-it.herokuapp.com/#/">live version</a></span></p>
                        </article>
					</div>
					<div id="ui-personal" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/personal/mockup-intro.jpg" alt="example use of denise nadal's personal branding system">
                            <h3 class="title3 h4 top-margin">Personal Portfolio v1</h3>
                            <p class="work-summary">UI/UX design for this site. <br>
                            <span class="float-right"><a href="projects/personal/details.php?type=uiux">details</a></span></p>
                        </article>
					</div>
					<div id="ui-flickerfeed" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/flickr-feed/flickrfeed-desktop-searchresults.png" alt="example search results for flickr feed demo project">
                            <h3 class="title3 h4 top-margin">Flickr Feed Project</h3>
                            <p class="work-summary">UI design for simple web app project <br>
                            <span class="float-right"><a href="projects/flickr-feed/details.php?type=uiux">details</a> | <a href="https://flickrfeed.glitch.me/">live demo</a></span></p>
                        </article>
					</div>
					<!-- <div id="ui-weefee" class="work-listing col3l col4m col6s col12x">
					<article class="white-bg work-listing pad2 material clearfix">
						<img class="thin-border" src="projects/weefee/weefee-logo-design.png" alt="logo design for weefee app">
						<h3 class="title3 h4">Weefee App</h3>
						<p class="work-summary">UI design for a network pen testing toolkit <br>
						<span class="float-right"><a href="projects/weefee/details.php?type=uiux">details</a></span></p>
					</article>
				</div> -->
					<div id="uiux-spilker" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/spilker/spilker-branding.jpg" alt="Mockups of digital and print branding for spilker custom homes">
                            <h3 class="title3 h4 top-margin">Spilker Custom Homes Site redesign</h3>
                            <p class="work-summary">site design for a local home builder <br>
                            <span class="float-right"><a href="projects/spilker/details.php?type=uiux">details</a> | <a href="http://spilkercustomhomes.com">live</a></span></p>
                        </article>
					</div>
					<div id="uiux-campusmaps" class="work-listing col3l col4m col6s col12x">
                        <article class="white-bg work-listing pad2 material clearfix">
                            <img class="thin-border" src="projects/campus-maps/campusmap-large.png" alt="dixie.edu campus maps page as viewed on a desktop">
                            <h3 class="title3 h4 top-margin">dixie.edu Campus Maps</h3>
                            <p class="work-summary">single page web app used to display information about buildings on campus. App is hosted on a customized WordPress template. <br>
                            <span class="float-right"><a href="projects/campus-maps/details.php?type=uiux">details</a> | <a href="https://dixie.edu/campus-maps">live page</a></span></p>
                        </article>
					</div>
				</div>
			</section>
		</div>
	</section>
	<!--<section id="skills-section" class="skills section">
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
	</section>-->
	<section id="experience-section" class="experience section fp-auto-height">
		<div class="container">
            <h1 class="title section-title no-margin">Experience</h1>
            <section id="pointman-productdesigner" class="row slide" data-anchor="pointman-productdesigner">
				<div class="job_details col7l col7m col6s col12x">
					<h2 class="heading-group">
						<span class="h3 display-block title">Pointman</span>
						<span class="h4 display-block"> Product Manager & UX Lead </span>
					</h2>
                    <p>Assist with managing product backlog and writing feature requirements for multiple desktop and mobile apps for HVAC contractors. Led user research and design during a pivot to build a new UI for the Pointman app. Later joined an innovation team focused on discovering new product opportunities.</p>
                    <ul>
                        <li>Use product analytics to track user engagement and feature performance</li>
                        <li>Design new features and define product requirements</li>
                        <li>Build wireframes & prototypes in Sketch & InVision</li>
                        <li>Facilitate customer discovery sessions, design workshops, & lean experiments</li>
                        <li>Create user personas, customer journey maps, workflow diagrams</li>
                        <li>Design new mobile-first UI and user workflows for existing Pointman app</li>
                        <li>User research, competitive analysis and opportunity mapping for new products</li>
                    </ul>
				</div>
				<div class="job_extras col5l col5m col6s col12x flat-col">
					<div class="white-bg material pad2 right-margin2">
						<img src="images/pm01.jpg" alt="various screens">
						<h3 class="h4">Features Designed</h3>
						<ul>
                            <li><a href="">Customer Screens</a></li>
                            <li><a href="">Mobile First Navigation System</a></li>
                            <li><a href="">Guided Technician Experience</a></li>
                            <li><a href="">Job Scheduling Experience</a></li>
					</div>
				</div>
            </section>
            <section id="pointman-uxengineer" class="row slide" data-anchor="pointman-uxengineer">
				<div class="job_details col7l col7m col6s col12x">
					<h2 class="heading-group">
						<span class="h3 display-block">UI/UX Engineer</span>
                        <span class="h5 display-block">Front-End Engineering & UI/UX Design</span>
                        <span class="h display-block title">Pointman</span>

					</h2>
                    <p>Front End Engineering and UI/UX Design for the Pointman app, a suite of field management software and mobile app for HVAC contractors.</p>
                    <ul>
                        <li>Built wireframes & prototypes in Sketch & InVision</li>
                        <li>Performed user testing of future designs and existing features</li>
                        <li>Facilitated cross-functional, collaborative design & research processes</li>
                        <li>Facilitated story mapping workshops for engineering team</li>
                        <li>Developed a Sketch UI library to accelerate the speed of creating prototypes.</li>
                        <li>Created design delivery process to ensure each project has a single source of truth.</li>
                    </ul>
				</div>
				<div class="job_extras col5l col5m col6s col12x flat-col">
					<div class="white-bg material pad2 right-margin2">
						<img src="images/pm02.jpg" alt="reporting dashboards and more">
						<h3 class="h4">Features Designed</h3>
						<ul>
                            <li><a href="">Reporting Dashboards</a></li>
                            <li><a href="">Job Quote & Invoicing System</a></li>
                            <li><a href="">Customer Screens</a></li>
                            <li><a href="">Invoice Templates</a></li>
					</div>
				</div>
			</section>
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
					<p>With project partner, Drew Adams, designed and implemented a new clean and modern site targeted towards our client's target demographic, utilizing user feedback to optimize UI/UX. Implemented onsite and offsite SEO & E-Marketing tactics including optimizing keywords, SERP results, creating infographics, newsletters and youtube videos. Used social media channels to reach target audience and generate leads.</p>
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
					<h1 class="title"><span class="subtitle">Contact</span><br><span class="title-cursive">Denise Nadal</h1>
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
							<div class="slim col12s left-edge center-text">
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
