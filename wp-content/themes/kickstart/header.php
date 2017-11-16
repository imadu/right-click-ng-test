<?php ?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta content="width=device-width, initial-scale=1" name="viewport">
	<title><?php
		global $page, $paged;
		wp_title('|', true, 'right');
		bloginfo('name');
		$site_description = get_bloginfo('description', 'display');
		if ($site_description && (is_home() || is_front_page())) { echo " | $site_description"; }
		if ( $paged >= 2 || $page >= 2 ) { echo ' | ' . sprintf('Page %s', max($paged, $page)); }
		?></title>
	<script>document.documentElement.className += " js";</script>
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/gtfavicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous"> 
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owl-carousel/owl.theme.css">
	<script src="https://use.fontawesome.com/eb8efc22d5.js"></script>
	<?php wp_head(); ?>
</head>

<!--[if IE 8]><body <?php body_class('ie8'); ?>><![endif]-->
<!--[if IE 9]><body <?php body_class('ie9'); ?>><![endif]-->
<!--[if !IE]><!--><body <?php body_class(); ?>><!-- <![endif]-->


<?php //wp_nav_menu( array( 'theme_location' => 'main_menu' ) ); ?>
<div class="owl-carousel" id="slides">
        <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg"></div>
            <div class="item"><img src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg"></div>  
        </div>

<header id="header" class="container-fluid">
		
			<ul class="nav navigation">
					<li class="nav-item">
						<a href="" class="nav-link">Subsidiaries</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">About GT Bank</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Investor Relations</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Careers</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Cooperate Social Responsibility</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Media</a>
					</li>
					<li class="nav-item">
						<a href="" class="nav-link">Security Center</a>
					</li>
					<div id="homeSearch" class="homeSearch hidden-sm">
        				<button id="myBtn"> Search our site</button>
      				</div>
				</ul>
			<div class="logo">
				<a href="gtbank.html">
					<img src="<?php echo get_template_directory_uri(); ?>/img/mobile-logo.png">
				</a>
				
			</div>

			<!--<img src="images/Logo_GuarantyTrustBank.png">-->
	</header>