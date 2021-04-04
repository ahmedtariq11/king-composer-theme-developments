  <!-- About-->
        <section class="page-section" id="about">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">About</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                    <?php
        if(cs_get_option('about')!= ''):?>
                <ul class="timeline">
                    <?php  $posts = new WP_Query( array( 'post_type' => 'aboutus' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
                    <li>
                        <div class="timeline-image"><img class="rounded-circle img-fluid" src="assets/img/about/1.jpg" alt="" /></div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4><?php the_excerpt();?></h4>
                                <h4 class="subheading"><?php the_title();?></h4>
                            </div>
                            <div class="timeline-body"><p class="text-muted"><?php the_content();?></p></div>
                        </div>
                    </li>
                   
                      <?php   wp_reset_postdata();?>
            <?php endwhile;?>
                  
                </ul>
            <?php endif;?>
            </div>
        </section>