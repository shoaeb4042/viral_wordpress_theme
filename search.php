<?php

 
get_header(); ?>
 


<!-- ##### Blog Post Area Start ##### -->
<div class="viral-story-blog-post section-padding-0-50">
        <div class="container">
            <div class="row">
            <?php 
             $cat=array("post-catagory","post-catagory cat-2","post-catagory cat-3","post-catagory cat-4");
            if ( have_posts() ) : ?>
 
               
 



                <!-- Blog Posts Area -->
                <div class="col-12 col-lg-8">
                    <div class="row">
                    <br>
                    <br>
                    <h1 style="padding:30px"><?php printf( __( 'Search Results for: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
                    <br>
                    <br>
                    <?php while ( have_posts() ) : 
                    
                            the_post();
                       
                            $categories = get_the_category();
 
							if ( ! empty( $categories ) ) {
							 $catname=esc_html( $categories[0]->name );
                             $category_id = get_cat_ID($catname);
							 $category_link = get_category_link( $category_id );
							}
                    
                    
                    ?>
                        

                       <!-- Single Blog Post -->
                       <div class="col-12 col-lg-6">
                            <div class="single-blog-post style-3">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="<?php the_permalink(); ?>"><img src="<?php 
                                      if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail_url('full');
                                      } 
                                       else
                                    echo get_template_directory_uri().'/img/404.jpg';?>" alt=""></a>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="<?php echo $category_link; ?>" class="<?php echo $cat[rand(0,3)];  ?>"><?php echo $catname; ?></a>
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
                      
                           else : ?>
	                    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
                        <?php endif; ?>



                    </div>
                    <style>
						  .page-numbers {
                            border-top-right-radius: 20;
                            border-bottom-right-radius: 20;
                            padding:10px;
                            margin-left: 10px;
                            font-weight: bold;
                            font-size: large;
                            border: 1px solid white;
                            color: #e20378;
                            background-color:#e9ecef;
                           
                          }

                     </style>

    






                    <div class="row">
                        <div class="col-12">
                            <div class="viral-news-pagination">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                    <?php
							  the_posts_pagination( array(
							    'screen_reader_text' => ' ',
								'mid_size'  => 2,
								'prev_text' => __( 'Previous', '' ),
								'next_text' => __( 'Next', '' ),
							) );
							
							
                            ?>
                             
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Area -->
                <div class="col-12 col-lg-4">
                    <div class="sidebar-area">

                        <?php   
                        dynamic_sidebar('sidebar-widgets');
                        
                        
                        ?>

                        


                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- ##### Blog Post Area End ##### -->












 
<?php get_footer(); ?>