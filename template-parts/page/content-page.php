<!-- ##### Viral News Breadcumb Area Start ##### -->
<div class="viral-news-breadcumb-area section-padding-50">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <!-- Breadcumb Area -->
                <div class="col-12 col-md-4">
                    <h3><?php the_title();  ?></h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></li>
                        </ol>
                    </nav>
                </div>

                <!-- Add Widget -->
                <div class="col-12 col-md-8">
                    <div class="add-widget">
                        
                    <?php   
                        dynamic_sidebar('post-ads');
                        
                    ?>


                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Viral News Breadcumb Area End ##### -->


<!-- ##### Blog Area Start ##### -->
<div class="blog-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">

                        <!-- Single Featured Post -->
                        <div class="single-blog-post-details">
                            
                            <div class="post-data">
                                
                                <h2 class="post-title"><?php echo the_title();    ?></h2>
                                <div class="post-meta">

                
                                    <p>
                                   <?php   the_content();?>
                                   </p>
                                </div>
                            </div>
                           

                        </div>

                        <!-- Related Articles Area -->
                        <div class="related-articles-">
                            <h4 class="mb-70">You May Like</h4>

                            <div class="row">
                                <!-- Single Post -->

                                  
                                <?php
                                $args = array(
                                'orderby' => 'comment_count',
                                'order'   => 'DESC',
                                
                                'posts_per_page' =>2,
                                 );


                           $featured = new WP_Query($args);
                                if ($featured->have_posts()): 
                                   while($featured->have_posts()): 
                                    $featured->the_post(); 
                                   ?>
                                
            

                                <div class="col-12">
                                    <div class="single-blog-post style-3 style-5 d-flex align-items-center mb-50">
                                        <!-- Post Thumb -->
                                        <div class="post-thumb">
                                            <a href="<?php the_permalink(); ?>"><img src="
                                            <?php 
                                               if ( has_post_thumbnail() ) { 
                                                the_post_thumbnail_url();
                                                  } 
                                                  else
                                            echo get_template_directory_uri().'/img/404.jpg';?>
                                            
                                            
                                            " alt=""></a>
                                        </div>
                                        <!-- Post Data -->
                                        <div class="post-data">
                                            <a href="#" class="post-catagory">Related</a>
                                            <a href="<?php the_permalink(); ?>" class="post-title">
                                                <h6><?php the_title(); ?></h6>
                                            </a>
                                            <div class="post-meta">
                                                <p class="post-author">By <?php the_author_posts_link(); ?></p>
                                                <p class="post-date"><?php echo get_the_date(); ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                 <?php 
                        endwhile;
                        endif;
                        
                         
                ?>



                            </div>
                        </div>




                        <!-- Comment Area Start -->
                        
                            <?php
                            
                      if ( comments_open() || get_comments_number() ) :
                          comments_template();
                            endif;
      
?>

                        <!-- Reply Form -->
                    </div>
                </div>
             <!-- ##### sidebar ##### -->
                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                    <?php   
                        dynamic_sidebar('sidebar-widgets');
                        
                        
                     ?>


                    </div>
                </div>
                <!-- ##### sidebar ##### -->
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->