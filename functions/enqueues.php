<?php
/*
 * Enqueues
 */

if ( ! function_exists('a2b_enqueues') ) {
	function a2b_enqueues() {

		// Styles

		wp_register_style('bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css', false, '4.3.1', null);
		wp_enqueue_style('bootstrap');

		wp_register_style('fontawesome5', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', false, '5.8.1', null);
		wp_enqueue_style('fontawesome5');

		wp_enqueue_style( 'gutenberg-blocks', get_template_directory_uri() . '/theme/css/blocks.css' );

		wp_register_style('a2b', get_template_directory_uri() . '/theme/css/a2b.css', false, null);
		wp_enqueue_style('a2b');

		// Scripts

		wp_register_script('modernizr', 'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('jquery-3.3.1', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '3.3.1', true);
		wp_enqueue_script('jquery-3.3.1');

		wp_register_script('bootstrap-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js', false, '4.3.1', true);
		wp_enqueue_script('bootstrap-bundle');
		// (The Bootstrap JS bundle contains Popper JS.)

		wp_register_script('a2b', get_template_directory_uri() . '/theme/js/a2b.js', false, null, true);
		wp_enqueue_script('a2b');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'a2b_enqueues', 100);
