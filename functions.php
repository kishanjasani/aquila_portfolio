<?php
/**
 * Theme Functions.
 *
 * @package Aquila_Portfolio
 */

function aquila_portfolio_enqueue_script() {
	wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', [], filemtime( get_template_directory() . '/style.css' ), 'all' );
}

add_action( 'wp_enqueue_scripts', 'aquila_portfolio_enqueue_script' );
