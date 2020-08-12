 <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">

        <!-- Main Footer Area -->
        <div class="main-footer-area">
            <div class="container">
                <div class="row">

                    <!-- Footer Widget Area1 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                        <?php 
                        dynamic_sidebar('footer1');
                        
                        ?>
                            

                        </div>
                    </div>

                     <!-- Footer Widget Area2 -->
                    <div class="col-12 col-md-6 col-lg-4">
                    <?php 
                        dynamic_sidebar('footer2');
                        
                        ?>

                    </div>





                    <!-- Footer Widget Area3 -->
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="footer-widget-area">
                        <?php 
                        dynamic_sidebar('footer3');
                        
                        ?>

                        </div>
                    </div>


                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12">
                        <!-- Copywrite -->
                        <p><a href="#"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">MeawBD</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area Start ##### -->
    <?php  wp_footer();?>
</body>

</html>
