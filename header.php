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