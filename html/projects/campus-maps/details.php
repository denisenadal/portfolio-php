<?php
$category = strip_tags($_GET['type'] );
$pageVars = array(
	'css' => array('den-work'),
	'title' => 'Campus Maps App',
	'category'=>$category,
	'js'	=>array('macy','projects')
);
include('../../header.php');
?>
<main id="content-sections-wrap">
<section id="project-intro" class="container">
	<div class="flex-row outdent flex-vcenter">
		<div class="preview-image col5l col5m col4s col12x ">
			<img src="maps-mockups.jpg" alt="Campus Maps app on iMac screens" class="" >
		</div>
		<div class="col7l col7m col8s col12x">
			<h1 class="project-title h1">Campus Map App</h1>
			<p class="h4 project-date uiux">UIUX Design, Summer 2017 </p>
			<p class="h4 project-date dev">Development, Summer 2017 </p>
			<h2 class="h3">Summary</h2>
			<p>Our campus is always growing, so we needed a campus map that could change as quickly as our campus. Our previous map options were a 3-D interactive map, which was fun and engaging, but impossible to update, or simply displaying a pdf of the print map. I opted to create a customized Google Map application, which is responsive and easy to use on all devices.</p>
		</div>
	</div>
</section>
<section id="project-process" class="accent-bar">
	<div class="container clearfix">
		<div class="row outdent">
			<div class="col12x col7s col8m col8l   ">
				<h2 class="h3"><span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Development</span> Process</h2>
				<div class="uiux">
					<p  >For the design, I tried to integrate the university’s typography, color schemes and flat design approach with aspects of Google’s Material design in terms of spacing, economy of design and icon usage. </p>
					<p  >In earlier iterations of the map, the map area was contained in a box, and the legend/navigation was outside the box and part of the normal page flow. I found this to be disengaging for users, because the viewport for the map felt cramped. By making the map full-width and (nearly) full-height, users are able to dive into the map and explore, with the legend floating over the map for when they need it.</p>
				</div>
				<div class="dev">
					<h3 class="h4">Designs for Functionality</h3>
					<p>The first implementation was simply a iframe embed of a Google MyMaps, but it was impossible to display the “Feature Pane” by default, which makes it difficult for users to know that they can interact with the map. For the first implementation, I focused on developing basic functionality; this included: organizing map features logically, allowing users to show and hide categories and individual map points, and clicking on markers to display more information about the buildings. </p>

					<h3 class="h4">Plans for v2</h3>
					<p>Currently the data for the map is stored in a GeoJSON file which is read in by the Google Maps client. For the next iteration, I plan to have the map client read the data directly from a kml link generated by Google Maps. By using a Google kml file, users can use the regular Google MyMaps website to update the map that appears on our Campus Map page, meaning that it can be updated easily by an authorized user. </p>
					<p>Another feature I plan to add to the next version is the ability to receive GET requests with query strings. This is would be used by departments or offices on campus who would like to embed/link to the map with their location pre-selected and highlighted.</p>
					<p>A third feature I would like to integrate is to add a link to each marker’s description which would open directions to the location in Google Maps.</p>

				</div>
			</div>
			<div class="col12x col5s col4m col4l  ">
				<!-- <a href="color_palettes.png"><img src="color_palettes.png" alt="" class="no-mobile">Color Palette Standard I developed as part of the this project.</a> -->
			</div>

		</div>
</section>
<section id="project-results" class="container top-margin4" >
	<h2 class="h3 pad1">The Final <span class="uiux">Design</span><span class="gd">Design</span><span class="dev">Product</span> </h2>
	<div id="dixiemaps-results-gallery" class="project-gallery col12x" data-sizes="3332">
		<figure class="project-img">
			<a href="campusmap-large.png">
				<img src="campusmap-large.png" alt="Desktop view of overview screen">
				<figcaption>Desktop view of overview screen</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="campusmaps-active.png">
				<img src="campusmaps-active.png" alt="Desktop view of point details">
				<figcaption>Desktop view of  point details</figcaption>
			</a>
		</figure>
		<figure class="project-img">
			<a href="campus-map-mobile01.png">
				<img src="campus-map-mobile01.png" alt="mobile view">
				<figcaption>mobile view</figcaption>
			</a>
		</figure>
		<div >
			<a href="http://dixie.edu/campus-maps" class="btn top-margin3 left-margin bottom-margin3">Visit live version</a>
		</div
	</div>
</section>

</main>
<?php include('../../footer.php');
