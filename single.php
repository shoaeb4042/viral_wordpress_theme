<?php
  get_header();

  while ( have_posts() ) :
    the_post();
    setPostViews(get_the_ID());
   // the_content();
    get_template_part( 'template-parts/page/content', 'single' );


    
endwhile; // End of the loop.

?>

  

<?php
function setPostViews($postID) {
    $count_key = 'post_views_count';
    $count = get_post_meta($postID, $count_key, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $count_key);
        add_post_meta($postID, $count_key, '0');
    }else{
        $count++;
        update_post_meta($postID, $count_key, $count);
    }
}
  get_footer();
?>