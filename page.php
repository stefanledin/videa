<?php get_header(); ?>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="site-width">
			<div class="site-width-inner">
				<?php the_post_thumbnail( ); ?>
			</div>
		</section>
		<section class="site-width grid-660">
			<div class="site-width-inner">
				<article>
					<header class="page-title">
						<h1 class="title serif"><?php the_title();?></h1>
					</header>
					<?php the_content(); ?>
					<a class="home-link" href="<?php echo home_url();?>">« Tillbaka</a>
				</article>
			</div>
		</section>
	<?php endwhile; endif; ?>
<?php get_footer(); ?>