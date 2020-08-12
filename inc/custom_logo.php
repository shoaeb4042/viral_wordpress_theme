<?php

function virall_custom_logo_setup() {
    $defaults = array(
        'height'      => 56,
        'width'       => 111,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'virall_custom_logo_setup' );



?>