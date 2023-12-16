<?php

define( 'BOT_TNEME_ROOT', get_template_directory_uri() );
define( 'BOT_ASSETS_DIR', BOT_TNEME_ROOT . '/assets');

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_scripts() {
	wp_enqueue_style( 'style-css', get_template_directory_uri() .'/assets/style/main.css');

	wp_enqueue_script( 'script-js', get_template_directory_uri() .'/assets/js/hamburger.js', array(), '1.0', true );
}