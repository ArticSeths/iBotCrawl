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

//get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.1.1/socket.io.js"></script>
</head>
<body>
    <script>
	var socket = io.connect('https://ibotcrawl.com:3000/' ,{'forceNew': true });
    </script>
</body>
</html>
<?php
//get_footer();
?>
