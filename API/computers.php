<?php
//Peticiones a lo relativo con computers
$req = $_REQUEST['opt'];

// Chequeamos si el usuario tiene permisos para hacer peticiones aqui
require_once('../wp-load.php');
global $wpdb;
$user_id = get_current_user_id();
$user = get_userdata( $user_id );
$user_roles = $user_meta->roles;

if ( !in_array( 'subscriber', $user_roles, true ) ) {
    echo 'no tienes permiso para acceder a esta pantalla';
    exit;
}
// -------------------------------------------

//Comenzamos API computers
if($req == "get_computers"){
    $sql = $wpdb->get_results($wpdb->prepare('SELECT * FROM list_computers WHERE user_id = %d', $user_id));
    echo json_encode($sql, JSON_HEX_TAG | JSON_HEX_APOS | JSON_HEX_QUOT | JSON_HEX_AMP | JSON_UNESCAPED_UNICODE);
}


?>