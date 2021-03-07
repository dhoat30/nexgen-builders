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
                                            $heroImage = get_field('free_consultation');
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
        <h2 class="playfair column-title light">Book a free consultation</h2>
        <?php 
           //get field
            $selectOptions = get_field('services_input_field');
            ?>
        <div class="form">
            <form action="processor.php">
                <div class="input-container">
                    <input type="text" id="first-name" placeholder="First Name">
                    <input type="text" id="last-name" placeholder="Last Name">
                    <input type="email" id="email" placeholder="Email">
                    <input type="tel" id="phone" placeholder="Phone Number">
                </div>
                <select name="service" placeholder="Choose Service" id="service">
                    <option value="No Service Selected">Choose Service</option>
                    <?php 
                    if( $selectOptions ): ?>
            
                        <?php foreach( $selectOptions as $option ): ?>
                            <option value="<?php echo $option['value'];?>"><?php echo $option['label']; ?></option>
                        <?php endforeach; ?>
                   
                    <?php endif; ?>
                </select>
                <textarea id="message" placeholder="Message"></textarea>
                <button class="button blue-bc white" type="submit">Submit</button>
            </form>

        </div>                                                
    </div>
</section>




<?php 

get_footer(); 
?>