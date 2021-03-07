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
                                            $heroImage = get_field('error_page');
                                            if( !empty( $heroImage ) ): ?>
                                                <div class="hero-image" style='background: url("<?php echo esc_url($heroImage['url']); ?>");'> 
                                            <?php
                                            endif;       
                                        }
                                        wp_reset_postdata();

                                        ?>
                                                <div class="overlay"></div>
                                                <div class="content">
                                                    <h1 class="white playfair row-title center-align regular">Error Page </h1>
                                                    
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

<section class="error-section margin-section">
    <div class="error-container row-container">
        <div class="error-content">
			<h1 class="black">404</h1>
			<h2 class="card-title playfair light margin-element">Sorry...This page is not found</h2>
			<a href="<?php echo get_site_url();?>" class="button blue-bc white rm-dec center-align">Back to home</a>
		</div> 
		<div class="error-image">
			<img src="<?php echo get_site_url();?>/wp-content/uploads/2021/03/404.png" alt="error page image">
		</div>

                                         
    </div>
</section>




<?php 

get_footer(); 
?>