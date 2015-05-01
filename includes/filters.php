<?php
/**
 * Lägg till extra classer på body
 */
function add_body_classes( $classes ) {
    return $classes;
}
add_filter( 'body_class', 'add_body_classes' );