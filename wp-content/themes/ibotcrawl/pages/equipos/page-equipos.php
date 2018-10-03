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
          <div class="container-fluid p-l-25 p-r-25 p-t-0 p-b-25 sm-padding-10">
            <!-- START ROW -->
            <div class="row">
              <div class="col-lg-3 col-sm-6  d-flex flex-column">
                <!-- START WIDGET widget_map_sales-->
                <!-- START ITEM -->
                <div class="card card-default no-border" data-social="item">
                  <div class="card-header ">
                    <h5 class="text-primary pull-right fs-12">Online <i class="fa fa-circle text-complete fs-11"></i></h5>
                    <div class="clearfix"></div>
                  </div>
                  <div class="card-description" style="background: #e8eff1;">
                    <img src="/images/os/windows-10-logo.png">
                  </div>
                  <div class="card-description">
                    <h5 style="text-align: center;">Diego-PC</h5>
                  </div>
                  <div class="card-footer clearfix">
                    <div class="pull-left">via <span class="text-complete">Pages</span>
                    </div>
                    <div class="pull-right hint-text">
                      July 23
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
		    </div>
	    </div>
<?php
get_footer();
?>
