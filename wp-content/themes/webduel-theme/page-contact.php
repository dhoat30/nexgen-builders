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
                                            $heroImage = get_field('contact');
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

<section class="contact-form-section margin-section">
    <div class="contact-form-container row-container">
        <h2 class="playfair column-title light">Get in touch</h2>

        <div class="form" >
            <form action="processor.php" id="contact-page-form">
                <div class="input-container">
                    <input type="text" id="first-name" placeholder="First Name" name="name">
                    <input type="text" id="last-name" placeholder="Last Name" name="lastName">
                    <input type="email" id="email" placeholder="Email" name="email">
                    <input type="tel" id="phone" placeholder="Phone Number" name="phone">
                </div>
                <textarea id="message" placeholder="Message" name="message"></textarea>
                <button class="button blue-bc white" type="submit">Submit</button>
            </form>

        </div>                                                
    </div>
</section>




<?php 

get_footer(); 
?>