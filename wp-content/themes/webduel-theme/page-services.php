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
                                            $heroImage = get_field('our_services');
                                            if( !empty( $heroImage ) ): ?>
                                                <div class="hero-image" style='background: url("<?php echo esc_url($heroImage['url']); ?>");'> 
                                            <?php
                                            endif;       
                                        }
                                        wp_reset_postdata();

                                        ?>
                                                <div class="overlay"></div>
                                                <div class="content">
                                                    <h1 class="white playfair row-title center-align regular"><?php echo get_the_title();?> </h1>
                                                    
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

<!-- What we do section? --> 
<section class="services-section">
    <div class="services-container row-container margin-section">
        <h2 class="playfair regular column-title center-align dk-grey">
            Our Services
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
                        'posts_per_page' => '-1',
                        'orderby' => 'publish_date',
                        'order' => 'ASC'
                    );
                    $query3 = new WP_Query( $args3 );

                    while($query3->have_posts()){ 
                        $query3->the_post(); 
                        ?>
                        <div class="card box-shadow">
                            <a href="<?php echo get_the_permalink(); ?>" class="rm-dec">
                                <img src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'large');?>" alt="<?php echo get_the_title();?>">
                                <h4 class="playfair card-title light dk-grey"> <?php echo get_the_title();?></h4>
                                <p class="paragraph light grey"><?php  echo wp_trim_words(get_the_content(), 40);?></p>
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




<?php 

get_footer(); 
?>