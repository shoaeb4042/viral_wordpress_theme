<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({
          google_ad_client: "ca-pub-5684120027135372",
          enable_page_level_ads: true
     });
</script>
    
  <?php  wp_head();?>
</head>

<body>
    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-header-content d-flex align-items-center justify-content-between">
                        
                            <!-- Breaking News Area -->
                            <div class="top-breaking-news-area">
                               
                                <div id="breakingNewsTicker" class="ticker">
                                
                                    <ul>
                                    
                                        <?php
						
						         get_template_part( 'template-parts/slider/content', 'headline' );
						
						             ?>
                                    </ul>
                                </div>
                            </div>

                            <!-- Social Info Area-->
                            <?php   
                            dynamic_sidebar('header-widgets');
                            
                            
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="viral-news-main-menu" id="stickyMenu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="viralnewsNav">

                        <!-- Logo -->
                      
                       <?php  
						
						if ( function_exists( 'the_custom_logo' ) ) {
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                             $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                             if(!empty($image[0]))
                             echo '<a href="'.get_site_url().'" class="nav-brand"><img src="'.$image[0].'"/> </a>';
                             
                            else 
                            echo '<div class="add-post-button"><a href="'.get_site_url().'" class="btn add-post-btn" >'. get_bloginfo( 'title' ).' </a></div>';
                               }
               
                                            
?>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                               
                                    
                                    <?php
                                        wp_nav_menu( array(
                                            'container'=>'<ul>',
                                            'theme_location' => 'top_menu',
                                            'fallback_cb'    => false ,// Do not fall back to wp_page_menu()
                                            'depth'=>'3',
                                        ) );

                                    ?>
                                    
                                  

                                <!-- Search Button -->
                                <div class="search-btn">
                                    <i id="searchbtn" class="fa fa-search" aria-hidden="true"></i>
                                </div>

                                <!-- Search Form -->
                                <div class="viral-search-form">
                                    <form id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get" role="search" >
                                    <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="s" placeholder="<?php esc_attr_e( 'Search &hellip;', 'shape' ); ?>" />
                                        <button type="submit" name="submit" id="searchsubmit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                    </form>
                                </div>

                                <!-- Video Post Button
                                <div class="add-post-button">
                                    <a href="#" class="btn add-post-btn">Add Post</a>
                                </div>
                                -->
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->