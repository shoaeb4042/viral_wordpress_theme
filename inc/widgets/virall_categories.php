<?php
class virall_categories extends WP_Widget{

  public function __construct(){

  	parent::__construct('virall_categories','Virall Categories',array(
     'description'=>'Categories',

  	));
  }
   

   public function widget($sidebar,$data){
    
                     $categories = get_categories( array(
                                  'orderby' => 'name',
                                  'order'   => 'ASC',

                              ) );
                    
                      ?>
  

                      <div class="footer-nav">
					  <h4><?php echo $data["title"];?></h4>
                                <ul>
                               
                                    
                                    
                                
                      
					  
					  
					  
					  
					  

                      <?php
                    
                       foreach( $categories as $cat ) {
                            $link=get_category_link($cat->cat_ID);
                            $count=$cat->category_count;
                            $name=!empty($data['count'])?$cat->name.' ('.$count.' )':$cat->name;

                               ?>

                        
                          
                        <li> <a href="<?php echo $link; ?>"> <?php echo $name; ?></a></li>

                        

                      

                    

  <?php
   }
    echo "</ul>
                            </div>";
   }

    public function form($data){

        ?>
         
        <p>
           <label>Title</label><input  value="<?php echo empty($data["title"])?'':$data["title"]; ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">
         

        	 <label>Show Post Count:</label><input  value="1" type="checkbox" name="<?php echo  $this->get_field_name('count'); ?>" class="widefat" <?php  echo empty($data["count"])?"":"checked" ; ?>> 
              
            
             
        	
        </p>




        <?php



    }

}
?>