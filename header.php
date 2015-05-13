<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php wp_title(''); ?></title>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class();?>>
		
		<?php if ( is_front_page() ) : ?>
			<div id="fullscreen">
				<div class="fullscreen-logo">
					<img src="<?php bloginfo( 'template_directory' );?>/assets/img/logo.png">
				</div>
				<video loop preload="none">
					<source src="<?php bloginfo( 'template_directory' ); ?>/assets/videos/ob10_v7.mp4" type="video/mp4" media="all and (min-width:481px)">
					<source src="<?php bloginfo( 'template_directory' ); ?>/assets/videos/ob10_v7.ogv" type="video/ogg" media="all and (min-width:481px)">
					<source src="<?php bloginfo( 'template_directory' ); ?>/assets/videos/ob10_v7.webm" type="video/webm" media="all and (min-width:481px)">
					<img src="<?php bloginfo( 'template_directory' ); ?>/assets/img/movie-fallback.jpg" alt="Vidéa">
				</video>
			</div>
		<?php endif; ?>

		<header role="banner">
			<div class="site-width">
				<a href="<?php echo home_url();?>">
					<img src="<?php bloginfo( 'template_directory' );?>/assets/img/logo.png" class="videa-logo">
				</a>
				<?php
				wp_nav_menu( array( 
					'menu' => 'mainmenu',
					'container' => ''
				) );
				?>
			</div>
		</header>