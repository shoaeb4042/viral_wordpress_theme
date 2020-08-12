<?php
  get_header();

  while ( have_posts() ) :
    the_post();
   // the_content();
    get_template_part( 'template-parts/page/content', 'page' );


    
endwhile; // End of the loop.

?>

  

<?php
  get_footer();
?>