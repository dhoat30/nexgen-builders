<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>
<!-- sliders section --> 
<section class="hero-section">
    <div class="slider-container owl-carousel owl-hero-slider">
        
            <?php 

                                        $args = array(
                                            'post_type' => 'slider',
                                            'tax_query' => array(
                                                array(
                                                    'taxonomy' => 'slider-category',
                                                    'field'    => 'slug',
                                                    'terms'    => array( 'home-page-hero-slider'),
                                                )
                                                ), 
                                                'orderby' => 'date', 
                                                'order' => 'ASC'
                                        );
                                        $query = new WP_Query( $args );

                                        while($query->have_posts()){ 
                                            $query->the_post(); 

                                            ?>
                                           
                                            <div class="slider" style='background: url("<?php echo get_the_post_thumbnail_url(); ?>");'> 
                                                <div class="overlay"></div>
                                                <div class="content">
                                                    <h1 class="white playfair row-title center-align regular"><?php echo get_the_content(); ?> </h1>
                                                    <?php 
                                                        if(get_field('link')){
                                                            ?>
                                                             <a class="rm-dec button blue-bc white center-align" 
                                                             href="<?php echo get_field('link') ?>"><?php echo get_field('link_title');?></a>
                                                            <?php
                                                        }
                                                    ?>
                                                   
                                                </div>
                                            </div>
            

            <?php

                                       
                                        }
                                        wp_reset_postdata();

                                        ?>


    </div>
                                        
</section>

   
<!-- What we do section? --> 
<section class="services-section">
    <div class="services-container row-container margin-section">
        <h2 class="playfair regular column-title center-align dk-grey">
            What We Do? 
        </h2>
        <h3 class="center-align dk-grey light nav-title">
            <?php
                $args2 = array(
                    'post_type' => 'subtitle'
                );
                $query2 = new WP_Query( $args2 );

                while($query2->have_posts()){ 
                    $query2->the_post(); 
                        echo get_field('our_services_subtitle');
                    ?>
                        
                    <?php
                }
                wp_reset_postdata();
                    ?>
        </h3>

        <div class="flex-cards">
            <?php
                    $args3 = array(
                        'post_type' => 'services', 
                        'posts_per_page' => '6'
                    );
                    $query3 = new WP_Query( $args3 );

                    while($query3->have_posts()){ 
                        $query3->the_post(); 
                        ?>
                        <div class="card box-shadow">
                            <a href="<?php echo get_the_permalink(); ?>" class="rm-dec">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>" alt="<?php echo get_the_title();?>">
                                <h4 class="playfair card-title light dk-grey"> <?php echo get_the_title();?></h4>
                                <p class="paragraph light grey"><?php echo wp_trim_words(get_the_content(), 40);?></p>
                                <a href="<?php echo get_the_permalink(); ?>" class="rm-dec blue light paragraph link"> Read More <i class="fal fa-long-arrow-right"></i></a>
                            </a>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                        ?>
        </div>
    </div>
</section>

<!-- Why choose us? --> 
<section class="usp-section">
    <div class="usp-container row-container margin-section">
        <h2 class="playfair regular column-title center-align dk-grey">
            Why Choose Us? 
        </h2>
        <h3 class="center-align dk-grey light nav-title">
            <?php
                $args2 = array(
                    'post_type' => 'subtitle'
                );
                $query2 = new WP_Query( $args2 );

                while($query2->have_posts()){ 
                    $query2->the_post(); 
                        echo get_field('unique_selling_proposition');
                    ?>
                        
                    <?php
                }
                wp_reset_postdata();
                    ?>
        </h3>
        
        <div class="flex-cards">
            <?php
                    $args3 = array(
                        'post_type' => 'usp', 
                        'posts_per_page' => '4'
                    );
                    $query3 = new WP_Query( $args3 );

                    while($query3->have_posts()){ 
                        $query3->the_post(); 
                        ?>
                        <div class="card">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>" alt="<?php echo get_the_title();?>">
                                <h4 class="playfair card-title light dk-grey"> <?php echo get_the_title();?></h4>
                                <p class="paragraph light grey"><?php echo get_the_content();?></p>
                        </div>
                        <?php
                    }
                    wp_reset_postdata();
                        ?>
        </div>
        
    </div>
    <img class="construction-worker" src="<?php echo get_site_url();?>/wp-content/uploads/2021/03/portrait-smiling-construction-worker-e1614878836872.png" alt="">
</section>

<section class="achievement-section dk-grey-bc">
    <div class="achievement-container row-container padding-row">
        <div class="flex-cards">
                <?php
                        $args3 = array(
                            'post_type' => 'accomplishments', 
                            'posts_per_page' => '6'
                        );
                        $query3 = new WP_Query( $args3 );

                        while($query3->have_posts()){ 
                            $query3->the_post(); 
                            ?>
                            <div class="card">
                                
                                <h4 class="card-title bold white center-align"> <?php echo get_the_title();?></h4>
                                <h5 class="playfair paragraph light white center-align"><?php echo get_the_content();?></h5>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                            ?>
        </div>        
    </div>
</section>

<!--our team--> 
<section class="our-team-section">
    <div class="our-team-container row-container margin-section">
    <h2 class="playfair regular column-title center-align dk-grey">
            Our Team
        </h2>
        <h3 class="center-align dk-grey light nav-title">
            <?php
                $args2 = array(
                    'post_type' => 'subtitle'
                );
                $query2 = new WP_Query( $args2 );

                while($query2->have_posts()){ 
                    $query2->the_post(); 
                        echo get_field('our_team_subtitle');
                    ?>
                        
                    <?php
                }
                wp_reset_postdata();
                    ?>
        </h3>
        <div class="flex-cards margin-row">
                <?php
                        $args_ach = array(
                            'post_type' => 'our-team', 
                            'posts_per_page' => '4'
                        );
                        $queryAch = new WP_Query( $args_ach );

                        while($queryAch->have_posts()){ 
                            $queryAch->the_post(); 
                            ?>
                            <div class="card">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>" alt="<?php echo get_the_title();?>">
                                <h4 class="playfair card-title light dk-grey"> <?php echo get_field('team_member_name');?></h4>
                                <h5 class="paragraph light dk-grey"><?php echo get_field('position');?></h5>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                            ?>
        </div>        
    </div>
</section>

<!--our clients--> 
<section class="our-clients-section ligh-grey-bc">
    <div class="our-clients-container row-container">
    <h2 class="playfair regular column-title center-align dk-grey">
            Our Clients
        </h2>
        <h3 class="center-align dk-grey light nav-title">
            <?php
                $argsClients = array(
                    'post_type' => 'subtitle'
                );
                $queryClients = new WP_Query( $argsClients );

                while($queryClients->have_posts()){ 
                    $queryClients->the_post(); 
                        echo get_field('our_clients_subtitle');
                    ?>
                        
                    <?php
                }
                wp_reset_postdata();
                    ?>
        </h3>
        <div class="flex-cards margin-row">
                <?php
                        $args_ach = array(
                            'post_type' => 'clients', 
                            'posts_per_page' => '-1'
                        );
                        $queryAch = new WP_Query( $args_ach );

                        while($queryAch->have_posts()){ 
                            $queryAch->the_post(); 
                            ?>
                            <div class="card">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium');?>" alt="<?php echo get_the_title();?>">
                                
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                            ?>
        </div>        
    </div>
</section>

<!--our Reviews--> 
<section class="our-reviews-section margin-section">
    <div class="our-reviews-container row-container">
        <h2 class="playfair regular column-title center-align dk-grey">
            Reviews 
        </h2>
        <div class="flex-cards margin-row owl-carousel owl-reviews">
                <?php
                        $args_ach = array(
                            'post_type' => 'reviews', 
                            'posts_per_page' => '-1'
                        );
                        $queryAch = new WP_Query( $args_ach );

                        while($queryAch->have_posts()){ 
                            $queryAch->the_post(); 
                            ?>
                            <div class="card">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>" alt="<?php echo get_the_title();?>">
                                <div class="content">
                                    <p class="paragraph light grey"><?php echo get_field('review'); ?></p>
                                    <h4 class="playfair card-title light dk-grey"><?php echo get_field('name'); ?></h4>
                                    <h5 class="paragraph light grey"><?php echo get_field('position'); ?></h5>
                                </div>
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                            ?>
        </div>        
    </div>
</section>
<?php 

get_footer(); 
?>