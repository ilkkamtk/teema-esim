<?php
function lisaaTyylitJaSkriptit() {
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/main.css' );
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js');
}

add_action( 'wp_enqueue_scripts', 'lisaaTyylitJaSkriptit' );


function rekisteroiMenu() {
	register_nav_menu( 'paavalikko', 'Päävalikko headeriin' );
}

add_action( 'init', 'rekisteroiMenu' );