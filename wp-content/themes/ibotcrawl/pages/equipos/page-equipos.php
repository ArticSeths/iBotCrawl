<?php
/*
Template Name: Equipos
*/

add_action('wp_enqueue_scripts', 'stylePage');
function stylePage() {
	$templateDir = get_template_directory_uri();
	wp_register_script('js-equipos', $templateDir . '/pages/equipos/js-equipos.js'); wp_enqueue_script('js-equipos');
	wp_register_style('css-equipos', $templateDir . '/pages/equipos/css-equipos.css'); wp_enqueue_style('css-equipos');
}

get_header();
?>
<div>
</div>
<?php
get_footer();
?>
