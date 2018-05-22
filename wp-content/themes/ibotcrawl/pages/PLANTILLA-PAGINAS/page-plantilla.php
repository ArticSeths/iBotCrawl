<?php
/*
Template Name: Plantilla
*/

add_action('wp_enqueue_scripts', 'stylePage');
function stylePage() {
	$templateDir = get_template_directory_uri();
	wp_register_script('js-plantilla', $templateDir . '/pages/agencias/js-plantilla.js'); wp_enqueue_script('js-plantilla');
	wp_register_style('css-plantilla', $templateDir . '/pages/agencias/css-plantilla.css'); wp_enqueue_style('css-plantilla');
}

get_header();
?>
<div>
</div>
<?php
get_footer();
?>
