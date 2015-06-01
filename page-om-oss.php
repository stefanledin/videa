<?php get_header(); ?>
	<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<section class="site-width">
		<div class="site-width-inner">
			<?php the_post_thumbnail( ); ?>
		</div>
	</section>
	<section class="site-width grid-660">
		<div class="site-width-inner">
			<article class="about-us">
					<header class="page-title">
						<h1 class="title serif"><?php the_title();?></h1>
					</header>
					<?php the_content(); ?>
			</article>
		</div>
	</section>
	<?php endwhile; endif; ?>
	<section class="site-width">
		<div class="site-width-inner">
			<div class="contact-list clearfix">
				<?php 
				$employees = get_posts( array(
					'post_type' => 'medarbetare',
					'orderby' => 'menu_order',
					'posts_per_page' => -1
				) );
				foreach ( $employees as $post ) : setup_postdata( $post );
				?>
				<ul class="employee contact-card">
					<li class="contact-card-image"><img src="<?php echo get_field('medarbetare_bild')['url'];?>">
					<li class="contact-card-name"><?php the_title(); ?>
					<li class="contact-card-title"><?php the_field('medarbetare_titel'); ?>
					<li class="contact-card-phone"><?php the_field('medarbetare_mobil'); ?>
					<li class="contact-card-email">
						<a href="mailto:<?php the_field('medarbetare_epost');?>">
							<?php the_field('medarbetare_epost');?>
						</a>
				</ul>
				<?php wp_reset_postdata(); endforeach; ?>
			</div>
		</div>
	</section>

<?php get_footer(); ?>