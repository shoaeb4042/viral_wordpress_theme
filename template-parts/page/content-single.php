<!-- ##### Viral News Breadcumb Area Start ##### -->
<div class="viral-news-breadcumb-area section-padding-50">
        <div class="container h-100">
            <div class="row h-100 align-items-center">

                <!-- Breadcumb Area -->
                <div class="col-12 col-md-4">
                    <h3><?php
                    $categories = get_the_category();
 
                    if ( ! empty( $categories ) ) {
                     $catname=esc_html( $categories[0]->name );
                     $category_id = get_cat_ID($catname);
                     $category_link = get_category_link( $category_id );
                    }
                    
                    echo $catname;
                    ?></h3>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page"><a href="<?php echo esc_url( $category_link ); ?>"><?php echo $catname;?></a></li>
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
                            <div class="post-thumb">
                                <img src="<?php 
                                               if ( has_post_thumbnail() ) { 
                                                the_post_thumbnail_url();
                                                  } 
                                                  else
                                            echo get_template_directory_uri().'/img/404.jpg';?>
                                " alt="">
                            </div>
                            <div class="post-data">
                                <a href="<?php echo esc_url( $category_link ); ?>" class="post-catagory"><?php echo $catname;  ?></a>
                                <h2 class="post-title"><?php echo the_title();    ?></h2>
                                <div class="post-meta">

                                    <!-- Post Details Meta Data -->
                                    <div class="post-details-meta-data mb-50 d-flex align-items-center justify-content-between">
                                        <!-- Post Author & Date -->
                                        <div class="post-authors-date">
                                            <p class="post-author">By <?php the_author_posts_link(); ?></p>
                                            <p class="post-date"><?php echo get_the_date(); ?></p>
                                        </div>
                                        <!-- View Comments -->
                                        <div class="view-comments">
                                            <p class="views"> <?php echo (int) get_post_meta(get_the_ID(), 'post_views_count', true); ?> views</p>
                                            <a href="#comments" class="comments"><?php comments_number( " 0"," 1"," %" ); ?> comments</a>
                                        </div>
                                    </div>
                                    <p>
                                   <?php   the_content();?>
                                   </p>
                                </div>
                            </div>
                           

                        </div>

                        <!-- Related Articles Area -->
                        <div class="related-articles-">
                            <h4 class="mb-70">Related Articles</h4>

                            <div class="row">
                                <!-- Single Post -->

                                  
                                <?php
                                $args = array(
                                'orderby' => 'date',
                                'order'   => 'DESC',
                                'cat_ID' => $category_id,
                                 'posts_per_page' =>3,
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
                                            <a href="<?php echo esc_url( $category_link ); ?>" class="post-catagory"><?php echo $catname; ?></a>
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