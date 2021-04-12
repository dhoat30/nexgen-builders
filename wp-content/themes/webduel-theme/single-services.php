<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>
<!-- hero image section --> 
<section class="hero-section" data-page="service-page">
    <div class="hero-image-container">
            <?php 

                                        while(have_posts()){ 
                                            the_post(); 
                                            ?>
                                                <div class="hero-image" style='background: url("<?php echo  get_the_post_thumbnail_url(get_the_id(), 'full');?>");'> 
                                            <?php
                                                 
                                        }

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
<!-- content section --> 
<section class="single-project-content-section row-container margin-section single-services-section">
    <div class="single-project-content-container">
        <div class="content-container">
            <?php					
											while ( have_posts() ) : the_post(); 
                                            
                                            $terms = get_the_terms( $post->ID, 'project-category' ); 
                                                foreach($terms as $term) {
                                                $categoryName[]= $term->slug;
                                                
                                                }
                                                
                                            ?>
                                            <div class="main-content">
                                                <h1 class="column-title playfair light dk-grey"><?php echo get_the_title(); ?></h1>
                                                 <?php echo get_the_content(); ?>

                                                
                                                
                                            </div>
                                            <?php 
                                            if(get_field('project_duration') || get_field('estimated_cost')){ //box shadow condition

                                    
                                            ?>
                                            <div class="meta-info">
                                                <?php 
                                                    if(get_field('project_duration')){
                                                        ?>
                                                        <div>
                                                            <?php 
                                                            $field = get_field_object('project_duration');
                                                            ?>
                                                            <h2 class="card-title playfair light dk-grey"><?php echo $field['label'];?></h2>
                                                            <h3 class="paragraph dk-grey light"><?php echo get_field('project_duration'); ?></h3>
                                                        </div>
                                                        <?php
                                                    }
                                                ?>
                                                
                                                <?php 
                                                    if(get_field('estimated_cost')){
                                                        ?>
                                                    <div>
                                                    <?php 
                                                        $field = get_field_object('estimated_cost');
                                                        ?>
                                                        <h2 class="card-title playfair light dk-grey"><?php echo $field['label'];?></h2>
                                                        <h3 class="paragraph dk-grey light"><?php echo get_field('estimated_cost'); ?></h3>
                                                    </div>
                                                <?php
                                                    }
                                                ?>
                                                
                                               
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                        <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- related products-->
<section class="related-products-section">
    <div class="related-products-container">

    </div>
</section>

<!--project cards--> 

        <?php
        $argsFilter = array(
            'post_type' => 'projects', 
            'tax_query' => array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'project-category',
                    'field'    => 'slug',
                    'terms'    => $categoryName
                )
            )
        );
        $queryFilter = new WP_Query( $argsFilter );
        if($queryFilter->have_posts()){
            ?>
            <section class="project-card-section single-project-related-section row-container">
    <div class="project-card-container  margin-row">
            <h4 class="row-title playfair light dk-grey">
                Related Projects
            </h4>
            <?php
        }
        ?>
        
        <div class="projects" >
                <?php                           

                                           
                                            $argsFilter = array(
                                                'post_type' => 'projects', 
                                                'tax_query' => array(
                                                    'relation' => 'AND',
                                                    array(
                                                        'taxonomy' => 'project-category',
                                                        'field'    => 'slug',
                                                        'terms'    => $categoryName
                                                    )
                                                )
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
                                                
                                                <a href="<?php echo get_the_permalink(); ?>">
                                                    <div class="content <?php print_r( $terms_string);?>">
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