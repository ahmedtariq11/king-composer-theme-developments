
   <!-- Footer-->
        <?php
        if(cs_get_option('footer')!= ''):?>
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left">
       <?php  echo esc_attr(get_option( 'footer_field' )); ?> </div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="<?php  echo esc_attr(get_option( 'twitter_field' )); ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php  echo esc_attr(get_option( 'instagram_field' )); ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="<?php  echo esc_attr(get_option( 'instagram_field' )); ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right">
                        <a class="mr-3" href="#!">Privacy Policy</a>
                        <a href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>
    <?php endif;?>



 <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?php echo get_template_directory_uri();  ?>/assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?php echo get_template_directory_uri();  ?>/assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?php echo get_template_directory_uri();  ?>/js/scripts.js"></script>
    </body>
</html>


