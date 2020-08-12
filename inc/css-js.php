<?php

function virall_enqueue(){

    
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.1.0', 'all');
    wp_enqueue_style('owl', get_template_directory_uri() . '/css/owl.carousel.min.css', array(), '1.1.0', 'all');
    wp_enqueue_style('animate', get_template_directory_uri() . '/css/animate.css', array(), '1.1.0', 'all');
    wp_enqueue_style('magnific', get_template_directory_uri() . '/css/magnific-popup.css', array(), '1.1.0', 'all');
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css', array(), '1.1.0', 'all');
    wp_enqueue_style('classy-nav', get_template_directory_uri() . '/css/classy-nav.min.css', array(), '1.1.0', 'all');
    wp_enqueue_style('nice-select', get_template_directory_uri() . '/css/nice-select.min.css', array(), '1.1.0', 'all');
    wp_enqueue_style('core-stylesheet', get_template_directory_uri() . '/style.css', array(), '1.1.0', 'all');
    wp_enqueue_style('map', get_template_directory_uri() . '/style.css.map', array(), '1.1.0', 'all');


      wp_deregister_script( 'jquery' );
      wp_register_script('jquery',get_template_directory_uri() . '/js/jquery/jquery-2.2.4.min.js',array(), '', 'true');
      wp_enqueue_script('jquery');
      wp_enqueue_script('popper',get_template_directory_uri() . '/js/bootstrap/popper.min.js',array(), '', 'true');
      wp_enqueue_script('bootstrap',get_template_directory_uri() . '/js/bootstrap/bootstrap.min.js',array(), '', 'true');
      wp_enqueue_script('plugins',get_template_directory_uri() . '/js/plugins/plugins.js',array(), '', 'true');
      wp_enqueue_script('active',get_template_directory_uri() . '/js/active.js',array(), '', 'true'); 
}




add_action('wp_enqueue_scripts','virall_enqueue');