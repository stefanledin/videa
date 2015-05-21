<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<section class="site-width">
		<div class="site-width-inner">
			<div class="js-video-container">
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	<section class="site-width grid-660">
		<div class="site-width-inner">
			<div class="case-title-group">
				<header class="page-title">
					<h1 class="case-title serif"><?php the_title();?></h1>
					<span class="case-short-description"><?php the_field('case_kort_beskrivning');?></span>
				</header>
			</div>
			<?php the_field('case_lang_beskrivning'); ?>
			<a class="home-link" href="<?php echo home_url();?>">« Tillbaka</a>
		</div>
	</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>