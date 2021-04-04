    <!-- Services-->
     
     <?php /*TemplateName:Service */?>
     <?php get_header();?>
        <section class="page-section" id="services">
 
            <div class="container">
              
                <div class="text-center">
                    
                    <h2 class="section-heading text-uppercase"></h2>
                    <h3 class="section-subheading text-muted">.</h3>
                </div>
  <?php
        if(cs_get_option('services')!= ''):?>
                <div class="row text-center">
                       <?php  $posts = new WP_Query( array( 'post_type' => 'services' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                         <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'icon_logo_image_small' ); ?>" alt="">
                           
                        </span>
                        <h4 class="my-3"><?php esc_html (the_title());?></h4>
                        <p class="text-muted"><?php echo esc_attr(the_content()); ?>.</p>
                    </div>
                   
                     <?php   wp_reset_postdata();?>
            <?php endwhile;?>
                </div>
           
<?php endif;?>
             
            </div>
            
        </section>
        <?php get_footer();?>