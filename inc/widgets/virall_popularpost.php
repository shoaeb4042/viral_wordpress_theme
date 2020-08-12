<?php
class virall_popularpost extends WP_Widget{

  public function __construct(){

  	parent::__construct('popular_post','Virall Popular Post',array(
     'description'=>'Popular Post Widget',

  	));
  }
   

   public function widget($sidebar,$data){
     ?>
                    
                    <div class="treading-articles-widget mb-70">
                            <h4><?php  echo $data['title'];?></h4> 
                    
                    
                    
                      <?php
                             $num=1;
                             $myposts = get_posts(array('meta_key'=>'post_views_count','orderby' => 'date','numberposts' =>empty($data['count'])?5:$data['count'],));
                             foreach($myposts as $post){

                              

                      ?>
                     
                         <!-- Single Trending Articles -->
                         <div class="single-blog-post style-4">
                                <!-- Post Thumb -->
                                <div class="post-thumb">
                                    <a href="<?php echo $post->guid; ?>"><img src="
                                    <?php 
                                $link=get_the_post_thumbnail_url($post->ID); 
                        if ( !empty($link) ) { 
                                      echo $link;
                                      } 
                    else
                    echo get_template_directory_uri().'/img/404.jpg';?>
                                    " alt=""></a>
                                    <span class="serial-number"><?php echo $num; $num++;?>.</span>
                                </div>
                                <!-- Post Data -->
                                <div class="post-data">
                                    <a href="<?php echo $post->guid; ?>" class="post-title">
                                        <h6><?php echo $post->post_title; ?></h6>
                                    </a>
                
                                </div>
                            </div>

                      


                 <?php }



                 echo '</div>'  ?>

  <?php
   }

    public function form($data){

        ?>
         
        <p>
           <label>Title</label><input  value="<?php echo empty($data["title"])?'':$data["title"]; ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">


        	 <label>Number Of Post To Show:</label><input  value="<?php echo empty($data["count"])?'':$data["count"]; ?>" type="text" name="<?php echo  $this->get_field_name('count'); ?>" class="widefat"> 
              
            
             
        	
        </p>




        <?php



    }

}
?>