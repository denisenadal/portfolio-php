<?php
define( 'DEN_ROOT', 'https://denisenadal.com/' );
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Denise Nadal Web Design & Development | <?php if(isset($pageVars['category']) ){ echo $pageVars['category'].': ';} echo $pageVars['title']; ?></title>
	<link rel="stylesheet" href="<?php echo DEN_ROOT;?>css/normalize.css">
	<link rel="stylesheet" href="<?php echo DEN_ROOT;?>css/den-base.css">
<?php if(!empty($pageVars['css']) ){
	foreach ($pageVars['css'] as $stylesheet) {
		echo '<link rel="stylesheet" href="'. DEN_ROOT.'css/'.$stylesheet.'.css">';
	}
}?>
</head>

<body class=" <?php if(isset($pageVars['category']) ){ echo $pageVars['category'];} ?>">
	<header id="main-header">
		<div class="mobile-btn-wrap">
			<button id="menu-icon" class="btn mobile-menu-btn closed">
				<span></span>
			</button>
		</div>
		<div class="container">
			<a id="logo-link" data-menuanchor="intro" href="/#intro">
				<h1 class="nav-logo"><span class="title-cursive">Denise Nadal</span><span class="subtitle">Web Design & Dev</span></h1>
			</a>
			<nav id="main-menu">
				<a data-menuanchor="about" href="<?php echo  DEN_ROOT;?>#about">About</a>
				<a data-menuanchor="work" href="<?php echo  DEN_ROOT;?>#work">Work</a>
				<a data-menuanchor="skills" href="<?php echo  DEN_ROOT;?>#skills">Skills</a>
				<a data-menuanchor="experience" href="<?php echo  DEN_ROOT;?>#experience">Experience</a>
				<a data-menuanchor="contact" href="<?php echo  DEN_ROOT;?>#contact">Contact</a>
			</nav>
		</div>
	</header>
