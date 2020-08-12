<?php
class virall_comments extends WP_Widget{

  public function __construct(){

  	parent::__construct('virall_comments','Virall Recent Comments',array(
     'description'=>'Recent Comments Widget',

  	));
  }
   

   public function widget($sidebar,$data){
     ?>
                    
                         <div class="latest-comments-widget">
                            <h4><?php  echo $data['title'];?></h4> 
                    
                            <?php
                                    $args = array(
                                        'status' => 'approve',
                                        'number' => empty($data['count'])?5:$data['count'],
                                        
                                    );
                                    $comments = get_comments($args);
                                    foreach($comments as $comment) :
                                        ?>
                         
                                     <!-- Single Comment Widget -->
                            <div class="single-comments d-flex">
                                <div class="comments-thumbnail">
                                    <img src="<?php echo get_template_directory_uri().'/img/user.png'  ;?>" alt="">
                                </div>
                                <div class="comments-text">
                                    <a href="<?php   echo $comment->comment_author_url;?>"><span><?php   echo $comment->comment_author;?></span>  <?php   echo substr($comment->comment_content,0,20).'..';?></a>
                                    <p><?php   echo $comment->comment_date ;?></p>
                                </div>
                            </div>



                                        <?php
                                    endforeach;
                                    ?>
                    
                      
                     </div>
                         
                      



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