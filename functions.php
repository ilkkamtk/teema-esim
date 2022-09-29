<?php
function lisaaTyylit() {
	wp_enqueue_style( 'main-style', '/wp-content/themes/teema/css/main.css' );
}

add_action('wp_enqueue_scripts', 'lisaaTyylit');