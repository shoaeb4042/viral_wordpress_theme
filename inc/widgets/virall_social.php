<?php
class virall_social extends WP_Widget{

  public function __construct(){

  	parent::__construct('virall_social','Virall Socail widgets',array(
     'description'=>'Subscribe & Follow Social link',

  	));
  }
   

   public function widget($sidebar,$data){
    

     ?>

                            <div class="top-social-info-area">
                                <a href="<?php echo $data['ggl'];  ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                <a href="<?php echo $data['pin'];  ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="<?php echo $data['fb'];  ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="<?php echo $data['tw'];  ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>

                

  <?php
   }

    public function form($data){

        ?>
         
        <p>
              <label>Title</label><input  value="<?php echo empty($data["title"])?'':$data["title"]; ?>" type="text" name="<?php echo $this->get_field_name('title'); ?>" id="<?php echo $this->get_field_id('title'); ?>" class="widefat">
          
        	 <label>Facebook URL:</label><input  value="<?php echo empty($data["fb"])?'':$data["fb"]; ?>" type="url" name="<?php echo  $this->get_field_name('fb'); ?>" class="widefat"> 
              
              <label>Twitter URL:</label><input  value="<?php echo empty($data["tw"])?'':$data["tw"]; ?>" type="url" name="<?php echo  $this->get_field_name('tw'); ?>" class="widefat">

              <label>Google+ URL:</label><input  value="<?php echo empty($data["ggl"])?'':$data["ggl"]; ?>" type="url" name="<?php echo  $this->get_field_name('ggl'); ?>" class="widefat">
             
             <label>Pinterest URL:</label><input value="<?php echo empty($data["pin"])?'':$data["pin"]; ?>" type="url" name="<?php echo  $this->get_field_name('pin'); ?>" class="widefat">
             
             
        	
        </p>




        <?php



    }

}
?>