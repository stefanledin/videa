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

		<section class="site-width">
			<div class="site-width-inner clearfix">
				<div class="our-areas">
					<?php for ( $i = 1; $i <= 3; $i++ ) : ?>
						<div class="area">
							<?php the_field('startsida_kolumn_'.$i); ?>
						</div>
					<?php endfor; ?>
				</div>
			</div>
		</section>

		<section class="site-width latest-case">
			<div class="site-width-inner clearfix">
				<h3 class="section-title">Våra senaste jobb</h3>
				<div class="case-list-ul">
				<?php
				$latest_cases = get_posts( array(
					'post_type' => 'case'
				) );
				for ( $i = 0; $i <= 9; $i++ ) :
				foreach ( $latest_cases as $post ) : setup_postdata( $post );
				?>
				<div class="case-list-li">
					<a href="<?php the_permalink();?>">
						<div class="case-list-title-overlay">
							<div style="display: table; height: 100%; width: 100%;">
								<div style="display: table-cell; vertical-align: middle;">
									<h2 class="case-list-title"><?php the_title();?></h2>
									<span class="case-list-description"><?php the_field('case_kort_beskrivning');?></span>
								</div>
							</div>
						</div>
						<img class="case-list-still" src="<?php echo get_field('case_stillbild')['url'];?>">
					</a>
				</div>
				<?php wp_reset_postdata(); endforeach; endfor; ?>
				</div>
			</div>
		</section>

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