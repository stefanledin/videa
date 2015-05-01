<?php
/**
 * Enable thumbnails
 */
add_theme_support('post-thumbnails');

/**
 * Remove width- and height attributes from <img> tags.
 */
function remove_thumbnail_dimensions( $html ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10 );
add_filter( 'image_send_to_editor', 'remove_thumbnail_dimensions', 10 );

/**
 * Helper for getting the URL to a thumbnail
 */
function get_thumbnail_url( $post_id, $size = null ) {
	$imageObject = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), $size );
	return $imageObject[0];
}