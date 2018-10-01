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
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content sm-gutter">
          <!-- START JUMBOTRON -->
          <div data-pages="parallax">
            <div class="container-fluid p-l-25 p-r-25 sm-p-l-0 sm-p-r-0">
              <div class="inner">
                <!-- START BREADCRUMB -->
                <ol class="breadcrumb sm-p-b-5">
                  <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                  <li class="breadcrumb-item active">Equipos</li>
                </ol>
              </div>
            </div>
		  </div>
		</div>
	  </div>
<?php
get_footer();
?>
