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
			<img src="<?php bloginfo( 'template_directory' );?>/assets/img/logo.png" class="videa-logo">
			<?php
			wp_nav_menu( array( 
				'menu' => 'mainmenu',
				'container' => ''
			) );
			?>
		</header>

		<footer role="contentinfo">
			<img src="<?php bloginfo( 'template_directory' );?>/assets/img/logo-footer.png" class="videa-logo-footer center-block">
			<div class="contact-info">
				<span>Vidéa AB, <?php the_field('foretagsinformation_adress', 'options');?><br>
					<a href="mailto:<?php the_field('foretagsinformation_e-post', 'options'); ?>">
						<?php the_field('foretagsinformation_e-post', 'options'); ?>
					</a> | <?php the_field('foretagsinformation_telefon', 'options');?>
				</span>
			</div>
		</footer>

		<?php wp_footer(); ?>
	</body>
</html>