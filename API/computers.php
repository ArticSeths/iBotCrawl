<?php
//Peticiones a lo relativo con computers
$req = $_REQUEST['opt'];

// Chequeamos si el usuario tiene permisos para hacer peticiones aqui
require_once('../wp-load.php');
global $wpdb;
function restrictly_get_current_user_role() {
    if( is_user_logged_in() ) {
      $user = wp_get_current_user();
      $role = ( array ) $user->roles;
      return $role[0];
    } else {
      return false;
    }
}

$roles_permitidos = array('subscriber', 'administrator');
$flag_permitido = false;
foreach($roles_permitidos as $role){
    if ( $role === restrictly_get_current_user_role() ) {
        $flag_permitido = true;
    }
}

if(!$flag_permitido){
    echo 'no tienes acceso a esta pantalla';
    exit;
}

// -------------------------------------------
echo 'entra:' ;
//Comenzamos API computers
if($req == "get_computers"){
    $sql = $wpdb->get_results($wpdb->prepare('SELECT * FROM list_computers WHERE user_id = %d', $user_id));
    echo json_encode($sql, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
}


?>