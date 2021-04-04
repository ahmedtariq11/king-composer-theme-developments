 <!-- Team-->
        <section class="page-section bg-light" id="team">
            <div class="container">
                
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
               
                 <?php    if(cs_get_option('team')!= ''):?>
                <div class="row">
                   
                       <?php

  
        global $post;
            $i=0;

  $posts = new WP_Query( array( 'post_type' => 'ourconsultant' , 'order' => 'ASC','post_per_page' =>'-1') );
while($posts->have_posts()) : $posts->the_post();

 
         



    ?>
   
                    <div class="col-lg-4">

 
                        <div class="team-member">

                              
                            <img  class="mx-auto rounded-circle" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="">

                            <h4><?php the_title();?></h4>
                            <p class="text-muted"><?php the_content();?></p>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo esc_attr( get_post_meta(get_the_ID(), 'twitter' ,true) ); ?>"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo esc_attr( get_post_meta(get_the_ID(), 'facebook' ,true) ); ?>"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="<?php echo esc_attr( get_post_meta(get_the_ID(), 'linkdin' ,true) ); ?>"><i class="fab fa-linkedin-in"></i></a>

                        </div>
                        
                    </div>
                      
                       <?php   wp_reset_postdata();?>
            <?php endwhile;?>

                </div>
           <?php endif;?> 
                    
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
                 
            </div>
            
        </section>