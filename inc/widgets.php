<?php
require_once(get_template_directory().'/inc/widgets/virall_social.php');
require_once(get_template_directory().'/inc/widgets/virall_popularpost.php');
require_once(get_template_directory().'/inc/widgets/virall_comments.php');
require_once(get_template_directory().'/inc/widgets/virall_categories.php');
add_action('widgets_init','virall_widgets');
function virall_widgets(){

     /** header social widgets only */
    register_sidebar( array(
        'name' => 'Header Widgets',
        'id' => 'header-widgets',
        'description' => 'Appears in the Header area',
            'before_widget' => '',
            'after_widget'  => '',
            'before_title'  => '',
            'after_title'   => ''
        ) );

        register_widget('virall_social');


        register_sidebar( array(
            'name' => 'Side Bar ',
            'id' => 'sidebar-widgets',
            'description' => 'Appears in the Sidebar',
                'before_widget' => '<div class="add-widget mb-70">',
                'after_widget'  => '</div>',
                'before_title'  => '<h4>',
                'after_title'   => '</h4>'
            ) );
            register_widget('virall_popularpost');
            register_widget('virall_comments');
            

            register_sidebar( array(
                'name' => 'Left Footer Area',
                'id' => 'footer1',
                'description' => 'Appears in the footer',
                    'before_widget' => '',
                    'after_widget'  => '',
                    'before_title'  => '<h4>',
                    'after_title'   => '</h4>'
                ) );

                register_sidebar( array(
                    'name' => 'Center Footer Area',
                    'id' => 'footer2',
                    'description' => 'Appears in the footer',
                        'before_widget' => '',
                        'after_widget'  => '',
                        'before_title'  => '<h4>',
                        'after_title'   => '</h4>'
                    ) );


                    register_sidebar( array(
                        'name' => 'right Footer Area',
                        'id' => 'footer3',
                        'description' => 'Appears in the footer',
                            'before_widget' => '',
                            'after_widget'  => '',
                            'before_title'  => '<h4>',
                            'after_title'   => '</h4>'
                        ) );

                        register_widget('virall_categories');

                        register_sidebar( array(
                            'name' => 'Viral post ads',
                            'id' => 'post-ads',
                            'description' => 'Appears in the post content',
                                'before_widget' => '',
                                'after_widget'  => '',
                                'before_title'  => '<h4>',
                                'after_title'   => '</h4>'
                            ) );

}