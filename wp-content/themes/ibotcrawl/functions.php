<?php
// CARGAMOS LOGOTIPO
function blog_favicon() {
    echo '<link rel="apple-touch-icon" sizes="76x76" href="'.get_template_directory_uri().'/assets/img/apple-icon.png">';
    echo '<link rel="icon" type="image/png" sizes="96x96" href="'.get_template_directory_uri().'/assets/img/favicon.png">';
    echo '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no">';
}
add_action('wp_head', 'blog_favicon');

// SETEAMOS LA HORA POR DEFECTO DE PHP
date_default_timezone_set("Europe/Madrid");

// AÑADIMOS EL TITULO DE LA WEB CON LOS NOMBRES DE LAS PAGINAS
function theme_slug_render_title() {
    ?><title><?php (wp_title( '|', true, 'right' ) ? wp_title( '|', true, 'right' ) : bloginfo( 'name' ));?></title><?php
}
add_action( 'wp_head', 'theme_slug_render_title' );


// ---------------- ESTILO DEL LOGIN ------------------
//

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/logo.png);height: 171px;width: 139px;background-size: 139px 171px;background-repeat: no-repeat;}
        body {background: #fff !important; color: #32373c !important;}
        body.login div#login form#loginform {background: #fff;border-radius: 3px;box-shadow: 0px 0px 0px rgba(0,0,0,0);}
        .login label {color: #32373c !important;}

        body.login div#login form#lostpasswordform {background: #fff;border-radius: 3px;box-shadow: 0px 0px 0px rgba(0,0,0,0);}

        body.login div#login form#loginform input#user_login {height: 40px;font-size: 15px;margin-bottom: 10px;background: #fff;color: #32373c;display: block;width: 100%;padding: 6px 12px;line-height: 1.42857143;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
        body.login div#login form#loginform input#user_pass {height: 40px;font-size: 15px;margin-bottom: 10px;background: #fff;color: #32373c;display: block;width: 100%;padding: 6px 12px;line-height: 1.42857143;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
        body.login div#login form#lostpasswordform input#user_login {height: 40px;font-size: 15px;margin-bottom: 10px;background: #fff;color: #32373c;display: block;width: 100%;padding: 6px 12px;line-height: 1.42857143;border: 1px solid #ccc;border-radius: 4px;-webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075);box-shadow: inset 0 1px 1px rgba(0,0,0,.075);-webkit-transition: border-color ease-in-out .15s,-webkit-box-shadow ease-in-out .15s;-o-transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
        .login #backtoblog a, .login #nav a {color: #32373c !important;}
        .login #login_error, .login .message {background-color: #fff !important;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'iBotCrawl';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

wp_enqueue_script('plupload-all');


add_action('wp_enqueue_scripts', 'globalStyles');
/***********************************************************************************************************
 * Funciones
 **********************************************************************************************************/
function globalStyles() {
    $templateDir = get_template_directory_uri();

    // jQuery
    wp_register_script('jQuery', $templateDir . '/assets/libs/jquery/jquery.min.js');
    wp_enqueue_script('jQuery');
}

function printS($string = "") {
    echo "<pre>" . var_export($string, true) . "</pre>";
}

function def_redirect_login() {
  return '/dashboard';
}
add_filter('login_redirect', 'def_redirect_login');


//capar Paginas si no estas logueado
/*if(!is_user_logged_in() && $_SERVER['REQUEST_URI'] != '/wp-login.php'){
    wp_redirect (home_url("/wp-login.php"));
    exit;
}*/



/* Main redirection of the default login page */
function redirect_login_page() {
	$login_page  = home_url('/');
	$page_viewed = basename($_SERVER['REQUEST_URI']);

	if($page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
		wp_redirect($login_page);
		exit;
	}
}
add_action('init','redirect_login_page');

/* Where to go if a login failed */
function custom_login_failed() {
	$login_page  = home_url('/');
	wp_redirect($login_page . '?login=failed');
	exit;
}
add_action('wp_login_failed', 'custom_login_failed');

/* Where to go if any of the fields were empty */
function verify_user_pass($user, $username, $password) {
	$login_page  = home_url('/');
	if($username == "" || $password == "") {
		wp_redirect($login_page . "?login=empty");
		exit;
	}
}
add_filter('authenticate', 'verify_user_pass', 1, 3);

/* What to do on logout */
function logout_redirect() {
	$login_page  = home_url('/');
	wp_redirect($login_page . "?login=false");
	exit;
}
add_action('wp_logout','logout_redirect');

function custom_rewrite_tag() {
    add_rewrite_tag('%dashboard%', '([^&]+)');
}
add_action('init', 'custom_rewrite_tag', 10, 0);


function custom_rewrite_rule() {
    add_rewrite_rule('^dashboard/([^/]*)/?','index.php?page_id=17&pc-name=$matches[1]','top');
    flush_rewrite_rules();
}
add_action('init', 'custom_rewrite_rule', 10, 0);
?>
