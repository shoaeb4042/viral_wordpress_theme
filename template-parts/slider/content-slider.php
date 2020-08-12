<?php
                            $args = array(
                            'post_type' => 'post',
                            'orderby'   => 'rand',
                            'posts_per_page' =>5,
                           );
                           $random = new WP_Query($args);
                           if ($random->have_posts()): 
                              while($random->have_posts()): 
                                $random->the_post(); 
                           ?>

                       <div class="single-blog-post d-flex align-items-center mb-50">
                            <div class="post-thumb">
                                <a href="<?php the_permalink() ?>"><img src="
                                <?php 
                                      if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail_url('thumbnail');
                                      } 
                                       else
                                    echo get_template_directory_uri().'/img/404.jpg';?>
                                
                                " alt="random_post"></a>
                            </div>
                            <div class="post-data">
                                <a href="<?php the_permalink() ?>" class="post-title">
                                    <h6><?php the_title() ?></h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-date"><a href="<?php the_permalink() ?>"><?php echo get_the_date(); ?></a></p>
                                </div>
                            </div>
                        </div>


                        <?php 
                        endwhile;
                        endif;
                        
                         
                ?>