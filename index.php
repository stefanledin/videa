<?php
/*
Template name: Startsida
 */
get_header(); ?>

		<section class="site-width">
			<div class="site-width-inner clearfix">
				<div class="showreel">
					<div class="js-video-container">
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; endif; ?>
					</div>
				</div>
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
				<div class="case-list-li <?php echo ( $i > 3 ) ? 'not-loaded' : '' ;?>">
					<a href="<?php the_permalink();?>">
						<div class="case-list-title-overlay">
							<div style="display: table; height: 100%; width: 100%;">
								<div style="display: table-cell; vertical-align: middle;">
									<h2 class="case-list-title"><?php the_title();?></h2>
									<span class="case-list-description"><?php the_field('case_kort_beskrivning');?></span>
								</div>
							</div>
						</div>
						<img class="case-list-still" data-src="<?php echo get_field('case_stillbild')['url'];?>">
						<noscript><img class="case-list-still" src="<?php echo get_field('case_stillbild')['url'];?>"></noscript>
					</a>
				</div>
				<?php wp_reset_postdata(); endforeach; endfor; ?>
				</div>
				<span class="js-case-load-more">Visa fler<br><span style="font-size: .688em;">&#9660;</span></span>
			</div>
		</section>

<?php get_footer(); ?>