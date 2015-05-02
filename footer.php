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