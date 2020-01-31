<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => '',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<img src="tutoring-cropped.png" alt="cropped view of the tutoring calendar/schedule page" class="col5l col5m col4s col12x vertical">
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">dixie.edu Tutoring Schedule App</h1>
			<p class="h4 project-date uiux">UI/UX Design </p>
			<p class="h4 project-date dev">Dev</p>
			<p class="h4 project-date gd">Design</p>
			<h2 class="h3">Summary</h2>
			<p></p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<h2 class="h3 col12x no-vpad float-left"><span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Development</span> Process</h2>
			<p  class="col12x col9s col8m col6l no-vpad  float-left uiux"></p>
			<p  class="col12x col9s col8m col6l no-vpad  float-left dev"></p>
			<p  class="col12x col9s col8m col6l no-vpad  float-left gd"></p>
			<figure class="project-img col12x col3s col4m col4l no-vpad float-right no-mobile">
			</figure>
			<div class="clear-left col12x col9s col8m col6l">
				<div class="project-gallery ">
					<figure class="project-img">
					</figure>
					<p class="caption-quote">
						<span></span>
					</p>
				</div>
			</div>
		</div>
</section>
<section id="project-results" class="container">
	<div class="flex-row outdent">
		<div class="col12x col6s col5m col4l">
			<h2 class="h3">The Final <span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Product</span> </h2>
			<p class="uiux"></p>
			<p class="dev"></p>
			<p class="gd"></p>
			<p></p>
			<a href="https://flickrfeed.glitch.me/" class="btn center-text display-block">Visit the live version</a>
		</div>
		<div class="col12x col6s col7m col8l">
			<div class="project-gallery">
				<figure class="project-img">
				<figure class="project-img">
			</div>
		</div>
	</div>
</section>
</main>
<?php include('../../footer.php');
