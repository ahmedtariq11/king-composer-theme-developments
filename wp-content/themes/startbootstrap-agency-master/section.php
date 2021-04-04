 <?php 
    if(cs_get_option('masthead')!= ''):?>
    <header class="masthead" >
            <div class="container" >

                <?php  $posts = new WP_Query( array( 'post_type' => 'head-masted' , 'order' => 'ASC' ) );
while($posts->have_posts()) : $posts->the_post();?>
                       <div class="masthead-subheading"><?php the_title();?></h3>
                       <div class="masthead-heading text-uppercase"><?php the_content();?></div>
                       <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="<?php the_permalink();?>"><?php echo esc_attr( get_post_meta(get_the_ID(), 'TELL MORE' ,true) ); ?></a>
                        <?php   wp_reset_postdata();?>

                   <?php endwhile;?>
                    </div>
             
                    
            
    </div><!--looking_for_specific_area -->
</header>
<?php endif;?>