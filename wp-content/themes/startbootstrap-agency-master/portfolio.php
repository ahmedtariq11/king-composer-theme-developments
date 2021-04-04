  <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                 <?php
        if(cs_get_option('portfolio')!= ''):?>
                <div class="row">

                       <?php  $posts = new WP_Query( array( 'post_type' => 'portfolio' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
                    <div class="col-lg-4 col-sm-6 mb-4">
                       
                        <div class="portfolio-item">
                          
                            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                                <div class="portfolio-hover">
                                    <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                               
                                <img  class="img-fluid" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="">
                            </a>
                            <div class="portfolio-caption">
                                <div class="portfolio-caption-heading"><?php the_title();?></div>
                                <div class="portfolio-caption-subheading text-muted"><?php the_content();?></div>
                            </div>
                         
                        </div>

                    </div>
                    
                       <?php   wp_reset_postdata();?>
            <?php endwhile;?>
                </div>
            <?php endif;?>
            </div>
        </section>