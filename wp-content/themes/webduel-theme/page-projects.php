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
                                            $heroImage = get_field('projects');
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

<!-- contact form section--> 

<section class="filter-by-section ligh-grey-bc padding-row">
    <div class="filter-by-container row-container">
        <h2 class="playfair column-title light center-align">Filter By</h2>

        <div class="filters row-container margin-element">
            <?php 
            $categories = get_categories(array(
                'taxonomy' => 'project-category'
            ));

            foreach ( $categories as $category ) {
                ?>
                <a  class="<?php echo esc_html( $category->name );?>" > <?php echo esc_html( $category->name );?></a>
                <?php
            }

                                      

                                        ?>
        </div>                                        
    </div>
</section>

<!--project cards--> 
<section class="project-card-section">
    <div class="project-card-container row-container margin-row">
        <div class="projects" >
                <?php

                                            $argsFilter = array(
                                                'post_type' => 'projects'
                                            );
                                            $queryFilter = new WP_Query( $argsFilter );

                                            while($queryFilter->have_posts()){ 
                                                $queryFilter->the_post();
                                                $postData = get_post_meta( get_the_ID() );		
                            
                                                $photos_query = $postData['gallery_data'][0];
                                                $photos_array = unserialize($photos_query);
                                                $url_array = $photos_array['image_url'];
                                                
                                                
                                                $category_detail=get_the_terms(get_the_id(), 'project-category');//$post->ID
                                                
                                                $terms_string = join(' ', wp_list_pluck($category_detail, 'name'));

                                                ?>
                                                <a class="content <?php print_r( $terms_string);?>" href="<?php echo get_the_permalink(); ?>">
                                                    <div>
                                                        <div class="parent  box-shadow">
                                                            <div class="child" style='background-image: url("<?php echo  $url_array[0];?>");'>
                                                            </div>
                                                        </div>
                                                        <h2 class="card-title light playfair dk-grey"><?php echo get_the_title();?></h2>
                                                        <p><?php echo get_field('location'); ?></p>
                                                        
                                                    
                                                    </div>
                                                </a>
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