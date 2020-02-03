<?php
$pageVars = array(
	'css' => array('den-home','jquery.fullpage.min'),
	'title' => '',
	'js'	=>array('scrolloverflow.min','jquery.fullpage.min','jquery.fullpage.extensions.min','fit.min','macy','projects','home')
);
include('header.php');
?>
<main id="content-sections-wrap">
	<section id="intro-section" class="intro section">
		<div class="container branding">
			<div class="bg-layers bg-top-right"></div>
			<div  class="bg-bottom-left bg-layers"></div>
			<div class="intro-content">
				<h1 class="title"><span class="title-cursive">Denise Nadal</span><br><span class="subtitle">Product & Design</span></h1>
				<p class="motto">I love solving problems and helping people through good design</p>
			</div>
		</div>
	</section>
	<?php include('about.php'); ?>
	<?php include('work.php'); ?>
	<?php include('experience.php'); ?>
	<?php include('contact.php'); ?>
</main>
<?php include('footer.php');
