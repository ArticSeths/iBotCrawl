<?php
/*
Template Name: Inicio
*/

add_action('wp_enqueue_scripts', 'stylePage');
function stylePage() {
	$templateDir = get_template_directory_uri();
	wp_register_script('js-inicio', $templateDir . '/pages/inicio/js-inicio.js'); wp_enqueue_script('js-inicio');
	wp_register_style('css-inicio', $templateDir . '/pages/inicio/css-inicio.css'); wp_enqueue_style('css-inicio');
}

get_header();
?>
<h1>Hola</h1>
<?php
get_footer();
?>
