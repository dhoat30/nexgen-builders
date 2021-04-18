<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-K6FJK3V');</script>
<!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
     <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
    
    
</head>

<body <?php body_class( );?>>
 
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6FJK3V"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

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
                <a href="<?php echo get_site_url();?>/free-consultation" class="blue-bc button center-align center-margin white rm-dec button-radius">Book a Consultation</a>
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