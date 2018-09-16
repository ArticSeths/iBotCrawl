<?php
	/*
	Template Name: Inicio
	*/

	/*add_action('wp_enqueue_scripts', 'stylePage');
	function stylePage() {
		$templateDir = get_template_directory_uri();
		wp_register_script('js-inicio', $templateDir . '/pages/inicio/js-inicio.js'); wp_enqueue_script('js-inicio');
		wp_register_style('css-inicio', $templateDir . '/pages/inicio/css-inicio.css'); wp_enqueue_style('css-inicio');
		//wp_register_script('js-particles', 'https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.js'); wp_enqueue_script('js-particles');
	}

	get_header();*/
?>

<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Inicio - iBotCrawl</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="/wp-content/themes/ibotcrawl/pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/wp-content/themes/ibotcrawl/pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/wp-content/themes/ibotcrawl/pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/wp-content/themes/ibotcrawl/pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/wp-content/themes/ibotcrawl/pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="/wp-content/themes/ibotcrawl/pages/css/themes/light.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="/wp-content/themes/ibotcrawl/pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header menu-pin">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <!-- <img src="/wp-content/themes/ibotcrawl/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="/wp-content/themes/ibotcrawl/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="/wp-content/themes/ibotcrawl/assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">-->
        <div id="particles-js" style="background: #14202f;"></div>
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">Adentrate en la red de iBotCrawl</h2>
          <p class="small">
            La plataforma web de control de equipos y gestión de big data © Copyright todos los derechos reservados a iBotCrawl 2018.
          </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="/wp-content/themes/ibotcrawl/assets/img/logo.png" alt="logo" style="display: block; margin: 0 auto; height: 130px;">
          
          <p class="p-t-35">Accede al panel de control</p>
          <?php if(isset($_GET['login']) && $_GET['login'] == "failed"){ ?>
            <div class="alert alert-danger" role="alert">
              <button class="close" data-dismiss="alert"></button>
              <strong>Oops! </strong>Los datos que has introducidos no son correctos
            </div>
          <?php }?>
          <!-- START Login Form -->
          <form name="loginform" id="loginform" action="/wp-login.php" method="post" class="p-t-15">

            <div class="form-group form-group-default">
              <label>Login</label>
              <div class="controls">
                <input type="text" name="log" id="user_login" placeholder="Nombre de usuario" class="form-control" required>
              </div>
            </div>
            <div class="form-group form-group-default">
              <label>Contraseña</label>
              <div class="controls">
                <input type="password" name="pwd" id="user_pass" placeholder="Contraseña" class="form-control" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 no-padding sm-p-l-10">
                <div class="checkbox ">
                  <input name="rememberme" type="checkbox" id="rememberme" value="forever">
                  <label for="rememberme">Recuerdame</label>
                </div>
              </div>
              <div class="col-md-6 d-flex align-items-center justify-content-end">
                <a href="#" class="text-info small">¿Necesitas ayuda? Contacta con el soporte técnico</a>
              </div>
            </div>
      			<p class="login-submit">
      				<input type="submit" name="wp-submit" id="wp-submit" class="btn btn-primary btn-cons m-t-10" value="Iniciar Sesión">
      				<input type="hidden" name="redirect_to" value="/">
      			</p>
      		</form>
          <!--END Login Form-->
        </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- BEGIN VENDOR JS -->
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ibotcrawl/assets/plugins/select2/js/select2.full.min.js"></script>
    <script type="text/javascript" src="/wp-content/themes/ibotcrawl/assets/plugins/classie/classie.js"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="/wp-content/themes/ibotcrawl/assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="/wp-content/themes/ibotcrawl/pages/js/pages.min.js"></script>
  </body>
</html>
<?php
//get_footer();
?>
<script src="//cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script type="text/javascript">
	particlesJS.load('particles-js', '/wp-content/themes/ibotcrawl/assets/particles.json', function() {
		console.log('callback - particles.js config loaded');
	});
</script>
