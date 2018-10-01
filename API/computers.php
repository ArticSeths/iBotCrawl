<?php
//Peticiones a lo relativo con computers
$req = $_REQUEST['opt'];

// Chequeamos si el usuario tiene permisos para hacer peticiones aqui
require_once('../wp-load.php');
global $wpdb;
$user_id = get_current_user_id();
echo $user_id;
$user = get_userdata( $user_id );
$user_roles = $user_meta->roles;

$roles_permitidos = array('subscriber', 'administrator');
$flag_permitido = false;
foreach($roles_permitidos as $role){
    if ( in_array( $role, $user_roles, true ) ) {
        $flag_permitido = true;
    }
}

if(!$flag_permitido){
    echo 'no tienes acceso a esta pantalla';
    exit;
}

// -------------------------------------------

//Comenzamos API computers
if($req == "get_computers"){
    $sql = $wpdb->get_results($wpdb->prepare('SELECT * FROM list_computers WHERE user_id = %d', $user_id));
    echo json_encode($sql, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
}


?>