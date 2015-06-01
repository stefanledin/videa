<?php
/*
Template name: Instagram
 */
get_header(); ?>
	<section class="site-width">
		<div class="site-width-inner clearfix">
			<header class="page-title">
				<h1 class="title serif"><?php the_title();?></h1>
			</header>
			<?php 
			$instagram = new Instagetter( array(
				'client_id' => '0f77c011d4404cf7948cfbc6ff51eae8'
			) );
			$user_images = $instagram->user('1673874285');
			if ( $user_images ) : ?>
			<ul class="instagram-list">
				<?php foreach ( $user_images->data as $image ) : ?>
					<li class="instagram-list-item">
						<a href="<?php echo $image->link;?>" target="_blank">
							<img src="<?php echo $image->images->low_resolution->url;?>">
						</a>
					</li>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
		</div>
	</section>
<?php get_footer(); ?>