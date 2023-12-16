<?php

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );

function theme_add_scripts() {
	// подключаем файл стилей темы
	wp_enqueue_style( 'style-css', get_template_directory_uri() .'/assets/style/main.css');

	// подключаем js файл темы
	wp_enqueue_script( 'script-js', get_template_directory_uri() .'/assets/js/hamburger.js', array(), '1.0', true );
}