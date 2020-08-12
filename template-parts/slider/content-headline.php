<?php
                            $args = array(
                            'post_type' => 'post',
                            'orderby'   => 'date',
                            'posts_per_page' =>5,
                           );
                           $random = new WP_Query($args);
                           if ($random->have_posts()): 
                              while($random->have_posts()): 
                                $random->the_post(); 
                           ?>


 <li><a href="<?php the_permalink() ?>">&nbsp;&nbsp;<?php the_title() ?></a></li>

                  <?php 
                        endwhile;
                        endif;     
                ?>
