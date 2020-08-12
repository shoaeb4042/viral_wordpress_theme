<div class="comment_area clearfix" id="comments">
	<ol class="commentlist">
<?php wp_list_comments(); ?>
</ol>
</div>


                                            <!-- Reply Form -->
											<div class="post-a-comment-area">
											  
											  <div class="contact-form-area">
											  
											  <?php
								 // If comments are closed and there are comments, let's leave a little note, shall we?
									if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
									?>

										<p class="no-comments">No Comment</p>
									<?php
									endif;

									$args = array(
									 'comment_field' => '<div class="col-12">
                                        </div>',
								     'fields' => apply_filters( 'comment_form_default_fields', array(

									  'author' =>
									  '<div class="col-12">
                                            <input name="author" type="text" class="form-control" id="name" placeholder="Name*" required>
                                        </div>',

									'email' =>
									  ' <div class="col-12">
                                            <input  name="email" type="email" class="form-control" id="email" placeholder="Email*" required>
                                        </div>',

									'Website' =>
									  '<div  name="website" class="col-12">
                                            <input type="text" class="form-control" id="website" placeholder="Website*" required>
                                       </div>'
									)),

								);
								comment_form( $args );
									?>

							</div>
							
                        </div>





















<style>


 .comment-author 
{
	padding: 30px;
	border: 1px;
	 

 }
.comment-author img  {
	border-radius: 50%;
    width: 60px;
    height: 60px;
    margin-top: 6px;
}
.fn {
	padding: 10px;
	font-weight: bold;
	color: #e20378;

}
.reply{
	float:right;
	display: inline-block;
    border-radius: 14px;
    padding: 10px;
	text-align:center;
    font-size: 14px;
    background: #e30a73;
	
	width:100px;
	color:white;
  

}
.reply a{
	color: white;
	font-weight: bold;
}

.form-submit input{
    float:right;
	display: inline-block;
    border-radius: 14px;
    padding: 10px;
	text-align:center;
    font-size: 14px;
    background: #e30a73;
	border: 1px solid
	width:140px;
	color:white;
}

</style>
