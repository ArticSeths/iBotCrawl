<?php

// hook cuando un usario se registra
add_action( 'user_register', 'myplugin_registration_save', 10, 1 );

function myplugin_registration_save( $user_id ) {
    $seed = str_split('abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789');
    shuffle($seed);
    $rand = '';
    foreach (array_rand($seed, 12) as $k) $rand .= $seed[$k];
    update_user_meta($user_id, 'user_token', $rand);
}
?>
