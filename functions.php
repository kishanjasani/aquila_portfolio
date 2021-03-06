<?php
/**
 * Theme Functions.
 *
 * @package Aquila_Portfolio
 */

/**
 * Register styles and scripts.
 *
 * @action wp_enqueue_scripts
 */
function aquila_portfolio_enqueue_script() {
	wp_register_style( 'stylesheet', get_template_directory_uri() . '/style.css', [], filemtime( get_template_directory() . '/style.css' ), 'all' );
	wp_register_script( 'main-js', get_template_directory_uri() . '/assets/main.js', [], filemtime( get_template_directory() . '/assets/main.js' ), true );

	wp_enqueue_style( 'stylesheet' );
	wp_enqueue_script( 'main-js' );
}

add_action( 'wp_enqueue_scripts', 'aquila_portfolio_enqueue_script' );
