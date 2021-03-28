<div class="dk-grey-bc">
    <div class="row-container footer-container">
        <div class="contact">
            <div class="logo">
                <a href="/">
                    <?php 
                    $args = array(
                        'post_type' => 'business-info'
                    );
                    $query = new WP_Query( $args );

                    while($query->have_posts()){ 
                        
                        $query->the_post(); 
                        $logo = get_field('logo');
                        if( !empty( $logo ) ): ?>
                            <img loading="lazy" src="<?php echo esc_url($logo['url']); ?>" alt="Logo">
                        <?php
                        endif; 
                        ?>
                </a>
                <p class="light-grey paragraph light margin-element">
                    <?php echo get_field('slogan');?>
                </p>
                
            </div>
            <div class="email margin-element">
                <a href="mailto:<?php echo get_field('email');?>" class="rm-dec light-grey light">
                     <i class="fas fa-envelope"></i>
                     <?php echo get_field('email');?>
                </a>
            </div>

            <div class="phone">
                <a href="tel:<?php echo get_field('contact_number');?>" class="rm-dec light-grey light">
                    <i class="fas fa-phone-alt"></i>
                    <?php echo get_field('contact_number');?>
                </a>
                
            </div>

           

            <?php
                    }
                    wp_reset_postdata();

                ?>
        </div>
        <div class="certification">
            
        <?php 
                    $args2 = array(
                        'post_type' => 'certification',
                        'order' => 'ASC'
                    );
                    $query2 = new WP_Query( $args2 );

                    while($query2->have_posts()){ 
                        
                        $query2->the_post(); 
                        $field = get_field_object('size');
                        $value = $field['value'];
                        if($value == 'one-column'){
                            ?>
                            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium_large'); ?>" alt="<?php echo get_the_title();?>" data-column="<?php echo $value?>" height="auto">
                            <?php
                        }
                        else{
                            ?>
                            <img loading="lazy" src="<?php echo get_the_post_thumbnail_url(get_the_id(), 'medium_large'); ?>" alt="<?php echo get_the_title();?>" data-column="<?php echo $value?>">
                            <?php
                        }
                       
                    }
                    wp_reset_postdata();

                    ?>
        </div>
        <div class="contact-form">
            <h6 class="white card-title playfair light">
                Get in touch
            </h6>
            <form id="footer-form" action="processor.php" method="post" class="margin-element">
                <input type="text" placeholder="Name" name="name" required>
                <input type="email" placeholder="Email here" name="email" required>
                <textarea name="message" id="message"  placeholder="Message here" required></textarea>
                <input class="button blue-bc white" type="submit" value="Submit">
             </form>
             <?php 
                    $social = array(
                        'post_type' => 'business-info'
                    );
                    $querySocial = new WP_Query( $social );

                    while($querySocial->have_posts()){ 
                        
                        $querySocial->the_post(); 
            
                       ?>
            <div class="social-container">
                <h6 class="white card-title playfair light margin-element">
                    Follow Us
                </h6>
                <div class="social-icons">
                
                    <?php 
                    if(get_field('facebook_')){
                        ?>
                        <a href="<?php echo get_field('facebook_');?>" class="rm-dec"><i class="fab fa-facebook-f light-grey"></i></a>

                        <?php
                    }
                    ?>
                    <?php 
                    if(get_field('linkedin')){
                        ?>
                        <a href="<?php echo get_field('linkedin');?>"><i class="fab fa-linkedin-in card-title light-grey"></i></a>

                        <?php
                    }
                    ?>
                    <?php 
                    if(get_field('instagram_')){
                        ?>
                        <a href="<?php echo get_field('instagram_');?>"><i class="fab fa-instagram card-title light-grey"></i></a>

                        <?php
                    }
                    ?>
                    <?php 
                    if(get_field('youtube')){
                        ?>
                        <a href="<?php echo get_field('youtube');?>"><i class="fab fa-youtube card-title light-grey"></i></a>

                        <?php
                    }
                    ?>
                    <?php 
                    if(get_field('twitter')){
                        ?>
                        <a href="<?php echo get_field('twitter');?>"><i class="fab fa-twitter card-title light-grey"></i></a>

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
        
    </div>
    <div class="border-top"> </div>
    <div class="copyright row-container">
        <div>
            <p class="light-grey paragraph light margin-element">NEXGEN Builders © 2020. All right reserved</p>
        </div>
        <div>
            <p class="light-grey paragraph light margin-element">
            Developed by 
            <a href="https://webduel.co.nz" class="rm-dec light-grey"> Webduel Limited</a> 
            </p>
        </div>
    </div>
</div>




<?php wp_footer(); ?>
</body>
</html>