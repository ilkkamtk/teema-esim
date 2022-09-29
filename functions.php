<?php
function lisaaTyylitJaSkriptit() {
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css');
	wp_enqueue_style( 'main-style', get_stylesheet_directory_uri() . '/css/main.css', ['bootstrap'] );
	wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js', [], false, true);
	wp_enqueue_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', ['jquery'], false, true);
}

add_action( 'wp_enqueue_scripts', 'lisaaTyylitJaSkriptit' );


function rekisteroiMenu() {
	register_nav_menu( 'paavalikko', 'Päävalikko headeriin' );
}

add_action( 'init', 'rekisteroiMenu' );

// bootstap valikko: https://github.com/AlexWebLab/bootstrap-5-wordpress-navbar-walker