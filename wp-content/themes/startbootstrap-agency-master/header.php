 <?php  
  ?>
<html class="no-js" <?php language_attributes(); ?>>

    <head>

        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" >
<?php
         $config = get_option('halim_options');
         $favicon = $config['favicon']
      ?>

        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    <!-- title of site -->
    <title><?php bloginfo();?></title>
        <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri();  ?>/assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo get_template_directory_uri();  ?>/css/styles.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    </head>
    <body id="page-top <?php echo implode(' ', get_body_class()); ?>">
        <?php if( function_exists( 'wp_body_open' ) ) wp_body_open(); ?>
        <!-- Navigation-->
          <?php
if(cs_get_option('header')!= ''):?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
           
            <div class="container">
   

                     
                     

                     

                       <?php if(cs_get_option('logo') != '') { ?>
        <a class="navbar-brand js-scroll-trigger" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img  alt="logo" src="<?php echo esc_url( cs_get_option('logo') ); ?>"></a> 
        <?php }
        ?>
             
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ml-1"></i>
                </button>

                <div class="collapse navbar-collapse" id="navbarResponsive">
                   
                    <!--
                    <ul class="navbar-nav text-uppercase ml-auto">
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#team">Team</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
                    </ul>
                    <!-->


                            <?php wp_nav_menu(array(
                 'theme_location' => 'primary',
'before'=>'<li class="nav-item">',
'after'=>'</li>',
               
                 'items_wrap' => '<ul  class="navbar-nav text-uppercase ml-auto  %2$s">%3$s</ul>',

                   'link_before' => '<a class="nav-link js-scroll-trigger">',
       'link_after' => '</a>',
                 
                   
                 'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                
                 'depth'           => 4,
            'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
                 
                ));
                ?>
                

                </div>
            </div>
        </nav>

        <?php endif;?>

        <!-- Masthead-->



 