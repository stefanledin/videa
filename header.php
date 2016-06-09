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
		<?php if ( is_front_page() && !is_integer(strpos($_SERVER['HTTP_REFERER'], home_url())) ) : ?>
			<div id="fullscreen">
				<div style="display: table; width: 100%; height: 100%; position: relative; z-index: 1;">
					<div class="fullscreen-logo" style="display: table-cell; vertical-align: middle; text-align: center;">
						<img class="fullscreen-logo" src="<?php bloginfo( 'template_directory' );?>/assets/img/logo.png">
						<img class="fullscreen-continue" src="<?php bloginfo( 'template_directory' );?>/assets/img/arrow-down.png">
					</div>
				</div>
				<video loop preload="none" style="position: absolute; top: 0;">
					<source src="<?php bloginfo( 'template_directory' ); ?>/assets/videos/videa-bg-film.mp4" type="video/mp4" media="all and (min-width:481px)">
					<source src="<?php bloginfo( 'template_directory' ); ?>/assets/videos/videa-bg-film.ogv" type="video/ogg" media="all and (min-width:481px)">
					<source src="<?php bloginfo( 'template_directory' ); ?>/assets/videos/videa-bg-film-hd.webm" type="video/webm" media="all and (min-width:481px)">
				</video>
			</div>
		<?php endif; ?>

		<header role="banner">
			<div class="site-width">
				<div class="site-width-inner">
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
			</div>
		</header>