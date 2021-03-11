<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
    
    
</head>

<body <?php body_class( );?>>
 

    <section class="dk-grey-bc">
        <div class="header row-container desktop-header">
            <div class="logo-container">
                <a href="/">
                    <?php 
                    $args = array(
                        'post_type' => 'business-info'
                    );
                    $query = new WP_Query( $args );

                    while($query->have_posts()){ 
                        
                        $query->the_post(); 
                        $logo = get_field('logo');
                        if( !empty( $logo ) ): ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo">
                        
                        <?php
                        endif; 
                    }
                    ?>
                    
                </a>
            </div>
            <nav class="navbar-container">
                <?php
                wp_nav_menu(
                        array(
                            'theme_location' => 'nexgen_main_menu', 
                            'container_id' => 'main-menu'
                        ));
                ?>
            </nav>

            <div class="free-consultation-container">
                <a href="<?php echo get_site_url();?>/free-consultation" class="blue-bc button center-align center-margin white rm-dec button-radius">Free Consultation</a>
            </div>
        </div>
        <div class="header row-container mobile-header">
            <div class="logo-container">
                <a href="/">
                    <?php 
                    $args = array(
                        'post_type' => 'business-info'
                    );
                    $query = new WP_Query( $args );

                    while($query->have_posts()){ 
                        
                        $query->the_post(); 
                        $logo = get_field('logo');
                        if( !empty( $logo ) ): ?>
                            <img src="<?php echo esc_url($logo['url']); ?>" alt="Logo">
                        
                        <?php
                        endif; 
                    }
                        ?>
                </a>
                
            </div>
            <div class="hamburger-menu">
                <i class="fad fa-bars"></i>
                <i class="fal fa-times"></i>
            </div>
            <nav class="navbar-container">
                <?php
                wp_nav_menu(
                        array(
                            'theme_location' => 'nexgen_main_menu', 
                            'container_id' => 'main-menu'
                        ));
                ?>
            </nav>
          

          
        </div>
    </section>
    
    <?php
    ?>