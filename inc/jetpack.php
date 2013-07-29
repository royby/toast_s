<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package toast_s
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function toast_s_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'content',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'toast_s_jetpack_setup' );
