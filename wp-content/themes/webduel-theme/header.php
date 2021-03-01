<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
    <!-- Google Tag Manager -->

<!-- End Google Tag Manager -->

    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="profile" href="https://gmpg.org/xfn/11"/>
    <?php wp_head(); ?>
    
</head>

<body <?php body_class( );?>>
  <div><h1 class="heading"> hello helo</h1></div>

    <section>
        <div>
            <nav>
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
   

