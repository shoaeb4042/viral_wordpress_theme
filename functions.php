<?php
/* css and javaScript enqueue */
require_once(get_template_directory().'/inc/css-js.php');
/* custom logo */
require_once(get_template_directory().'/inc/custom_logo.php');
/* Dynamic Menu */
require_once(get_template_directory().'/inc/navbar.php');
/* feature pst */
require_once(get_template_directory().'/inc/fpost.php');

/*  theme support*/

require_once(get_template_directory().'/inc/theme_support.php');


/*  sidebar widget*/
require_once(get_template_directory().'/inc/widgets.php');

function create_posttype() {
    register_post_type( 'acme_product',
      array(
        'labels' => array(
          'name' => 'Products',
          'singular_name' => 'Products'
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'products'),
      )
    );
  }
  add_action( 'init', 'create_posttype' );



?>
