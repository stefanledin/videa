<?php get_header(); ?>

	<section class="site-width grid-660">
		<div class="site-width-inner">
			<article class="about-us">
				<?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
					<h3 class="section-title"><?php the_title();?></h3>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</article>
		</div>
	</section>
	<section class="site-width">
		<div class="site-width-inner">
			<div class="contact-list clearfix">
				<?php 
				$employees = get_posts( array(
					'post_type' => 'medarbetare',
					'orderby' => 'menu_order'
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