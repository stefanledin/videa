<?php
function enqueue_scripts_and_styles () {
	$themeDir = get_template_directory_uri();
	$assetsDir = $themeDir . '/assets';
	$assetsPath = get_stylesheet_directory() . '/assets';
	
	// wp_enqueue_style( $handle, $src, $deps, $ver, $media );
	wp_enqueue_style( 'normalize', $assetsDir.'/css/normalize.css', null, null, null );
	wp_enqueue_style( 'stylesheet', $assetsDir.'/css/style.css', array( 'normalize' ), filemtime($assetsPath.'/css/style.css'), null );
	
	// wp_enqueue_scripts($handle, $src, $deps, $ver, $in_footer);
	wp_deregister_script( 'jquery' );
	#wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-latest.min.js', null, null, true );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_and_styles' );