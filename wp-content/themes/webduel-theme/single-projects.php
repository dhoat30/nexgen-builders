<?php 
/* Template Name: Places * Template Post Type: post*/ /*The template for displaying full width single posts. */
get_header(); 

?>
<!-- hero image section --> 
<section class="single-project-hero-section row-container margin-row">
    <div class="single-project-hero-container">
    <?php					
											while ( have_posts() ) : the_post(); 
                                            $postData = get_post_meta( get_the_ID() );		
                                            $photos_query = $postData['gallery_data'][0];
                                            $photos_array = unserialize($photos_query);
                                            $url_array = $photos_array['image_url'];
                                            $count = sizeof($url_array);
                                            
                                            ?>
    <h1 class="row-title playfair light dk-grey margin-element"><?php echo get_the_title(); ?></h1>
        <div class="gallery-container">
        
                                            <div class="single-image">

                                                <img class="img-fluid gallery-img" src="<?php echo $url_array[0]; ?>" alt="<?php echo get_the_title();?>"/>
                                            </div>    
                                            <div class="image-gallery">
                                            <?php
                                            for( $i=1; $i<$count; $i++ ){
                                                
                                            ?>
                                                <a class="gallery-link" href="<?php echo $url_array[$i]; ?>" data-lightbox="gallery">
                                                    <img class="gallery-image" src="<?php echo $url_array[$i]; ?>" alt="image-1">
                                                </a>
                                                    
                                            
                                            <?php
                                                if ($i == 0) { $i=0; }
                                            }
                                            
                                        ?>
                                        </div>
                                        <?php endwhile; ?>
        </div>
    </div>
</section>

<!-- content section --> 
<section class="single-project-content-section row-container margin-row">
    <div class="single-project-content-container">
        
        <div class="content-container">
            <?php					
											while ( have_posts() ) : the_post(); 
                                            
                                            $terms = get_the_terms( $post->ID, 'project-category' ); 
                                                foreach($terms as $term) {
                                                $categoryName[]= $term->name;
                                                
                                                }
                                            ?>
                                            <div class="main-content">
                                                <h1 class="column-title playfair light dk-grey">Brief</h1>
                                                <p class="paragraph dk-grey light"> <?php echo get_field('brief'); ?></p>

                                                <h1 class="column-title playfair light dk-grey">Build</h1>
                                                <p class="paragraph dk-grey light"><?php echo get_field('build_'); ?></p>

                                                <h1 class="column-title playfair light dk-grey">Outcome</h1>
                                                <p class="paragraph dk-grey light"><?php echo get_field('outcome_'); ?></p>
                                                
                                            </div>
                                            <div class="meta-info">
                                                <div>
                                                    <h2 class="card-title playfair light dk-grey">Project Name</h2>
                                                    <h3 class="paragraph dk-grey light"><?php echo get_the_title(); ?></h3>
                                                </div>
                                                <div>
                                                    <h2 class="card-title playfair light dk-grey">Project Start</h2>
                                                    <h3 class="paragraph dk-grey light"><?php echo get_field('project_start'); ?></h3>
                                                </div>
                                                <div>
                                                    <h2 class="card-title playfair light dk-grey">Project Completion</h2>
                                                    <h3 class="paragraph dk-grey light"><?php echo get_field('project_completion_date'); ?></h3>
                                                </div>
                                                <div>
                                                    <h2 class="card-title playfair light dk-grey">Project Location</h2>
                                                    <h3 class="paragraph dk-grey light"><?php echo get_field('location'); ?></h3>
                                                </div>
                                               
                                            </div>
                                            
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
<section class="project-card-section single-project-related-section">
    <div class="project-card-container row-container margin-row">
    
        <?php 
        $argsFilter = array(
            'post_type' => 'projects',
            'post__not_in' => array(get_the_id()),
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
                                                    'post__not_in' => array(get_the_id()),
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