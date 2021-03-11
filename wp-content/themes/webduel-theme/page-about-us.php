<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>
<!-- hero image section --> 
<section class="hero-section">
    <div class="hero-image-container">
            <?php 

                                        $args = array(
                                            'post_type' => 'hero-image'
                                        );
                                        $query = new WP_Query( $args );

                                        while($query->have_posts()){ 
                                            $query->the_post(); 
                                            $heroImage = get_field('about_us');
                                            if( !empty( $heroImage ) ): ?>
                                                <div class="hero-image" style='background: url("<?php echo esc_url($heroImage['url']); ?>");'> 
                                            <?php
                                            endif;       
                                        }
                                        wp_reset_postdata();

                                        ?>
                                                <div class="overlay"></div>
                                                <div class="content">
                                                    <h1 class="white playfair row-title center-align regular"><?php echo get_the_title(); ?> </h1>
                                                    
                                                    <?php
                                                    //breadcrumbs 
                                                    if ( function_exists('yoast_breadcrumb') ) {
                                                    yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                                                    }
                                                    ?>
                                                    
                                                   
                                                </div>
                                            </div>
    </div>                                  
</section>

<section class="about-us-content-section margin-section">
    <div class="about-us-container row-container">
        <div class="flex-cards">
            <div class="card">
                <div class="content">
                    
                             <h2 class="playfair column-title light">Welcome to NEXGEN Builders</h2>
                        
                            <p class="paragraph light grey"><?php the_content();?></p>

                </div>
                <div class="image-container">
                    <div class="background box-shadow">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large'); ?>" alt="">
                    </div>
                    
                </div>
            </div>
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
                                <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium_large');?>" alt="<?php echo get_the_title();?>">
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


<?php 

get_footer(); 
?>