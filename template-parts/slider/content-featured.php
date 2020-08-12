<?php
$args = array(
    'meta_key' => 'meta-checkbox',
    'meta_value' => 'yes',
    'posts_per_page' =>1,
    'orderby'   => 'date',

   );
   $featured = new WP_Query($args);  
   if ($featured->have_posts()): 
      while($featured->have_posts()):
      $featured->the_post() ;

              $categories = get_the_category();
 
							if ( ! empty( $categories ) ) {
							 $catname=esc_html( $categories[0]->name );
                $category_id = get_cat_ID($catname);
							 $category_link = get_category_link( $category_id );
							}
?>

 <!-- Single Welcome Slide -->
                       

                           
                            <div class="col-12 col-lg-8">
                                   <div class="welcome-post">
                                        <img src="<?php 

                                        
                                      if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail_url('full');
                                      } 
                                       else
                                    echo get_template_directory_uri().'/img/404.jpg';?>" alt="">
                                        <div class="post-content" data-animation="fadeInUp" data-duration="500ms">
                                            <a href="<?php echo $category_link; ?>" class="tag"><?php echo $catname; ?></a>
                                            <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                            <p><?php echo get_the_date(); ?></p>
                                        </div>
                                    </div>
                                   
                                </div> 



       <?php
        endwhile;
        endif;
          ?>
    <div class="col-12 col-lg-4">
     <div class="welcome-posts--">
                                    


          <?php              
                         
      
$args = array(
    'meta_key' => 'meta-checkbox',
    'meta_value' => 'yes',
    'posts_per_page' =>3,
    'orderby'   => 'date',

   );
   $c=1;
   $featured = new WP_Query($args);  

   if ($featured->have_posts()): 
      while($featured->have_posts()):
        $featured->the_post() ;
        if($c==1){
           $c++;
           continue;
        }
     

              $categories = get_the_category();
 
							if ( ! empty( $categories ) ) {
							 $catname=esc_html( $categories[0]->name );
                $category_id = get_cat_ID($catname);
							 $category_link = get_category_link( $category_id );
							}
?>

 
                                        <!-- Welcome Post  -->
                                        <div class="welcome-post style-2">
                                            <img src="<?php 
                                      if ( has_post_thumbnail() ) { 
                                      the_post_thumbnail_url('full');
                                      } 
                                       else
                                    echo get_template_directory_uri().'/img/404.jpg';?>" alt="">
                                            <div class="post-content" data-animation="fadeInUp" data-delay="750ms" data-duration="500ms">
                                                <a href="<?php echo $category_link; ?>" class="tag tag-3"><?php echo $catname; ?></a>
                                                <a href="<?php the_permalink(); ?>" class="post-title"><?php the_title(); ?></a>
                                                <p><?php echo get_the_date(); ?></p>
                                            </div>
                                        </div>






<?php
       
        
        endwhile;
        endif;?>

         </div>
         </div>