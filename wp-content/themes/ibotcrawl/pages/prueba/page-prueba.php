<?php
/*
Template Name: Inicio
*/

add_action('wp_enqueue_scripts', 'stylePage');
function stylePage() {
	$templateDir = get_template_directory_uri();
	wp_register_script('js-prueba', $templateDir . '/pages/prueba/js-prueba.js'); wp_enqueue_script('js-prueba');
	wp_register_style('css-prueba', $templateDir . '/pages/prueba/css-prueba.css'); wp_enqueue_style('css-prueba');
}

get_header();
?>
<h1>Esto es una prueba</h1>
<?php
get_footer();
?>
