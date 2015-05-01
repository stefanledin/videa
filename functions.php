<?php
/**
 * Content
 *
 * 1. Custom post types
 * 2. Enqueue scripts and styles
 * 3. Images
 * 4. Filters
 * 5. Menus
 */
require 'includes/custom-post-types.php';

require 'includes/enqueue-scripts-styles.php';

require 'includes/images/images.php';
require 'includes/images/custom-image-sizes.php';

require 'includes/filters.php';

require 'includes/menus.php';

if ( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}