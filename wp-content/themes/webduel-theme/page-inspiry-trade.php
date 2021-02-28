<?php
get_header(); 
    while(have_posts()){ 
        the_post(); 
        ?>
        
    <section class="about-us">
        <div class="slider-container trade-page">


            <div class="slider">
                            <div class="hero-overlay"></div>
                            
                                            
                                                <div class="slide"  style='background: url("<?php echo get_site_url();?>/wp-content/uploads/2020/11/porters-paints-stone-coarse-rust-1.jpg") no-repeat
                                                        center top/cover;'>
                                                    <div class="content">
                                                        <h1 class="lg-font-sz center-align regular">INSPIRY TRADE</h1>
                                                        <h3 class="roboto-font center-align white section-ft-size regular">
                                                            Show case your work & be listed in our Trade Directory.
                                                        </h3>
                                                            <?php if(is_user_logged_in()){ 
                                                                ?>
                                                                                <a class="bc-btn bc-btn--register trade-register-button" href='<?php echo get_home_url(). "/add-listing/?listing_type=gd_place" ?>'> Add a Listing</a>

                                                                <?php
                                                                    }
                                                                else{
                                                                    ?>
                                                                        <a class="bc-btn bc-btn--register trade-register-button" href='<?php echo get_home_url(). "/trade-registration" ?>'> Create A Trade Account</a>

                                                                    <?php
                                                                }
                                                            ?>
                                                    </div>
                                                </div>

                                                <div class="slide"  style='background: url("<?php echo get_site_url();?>/wp-content/uploads/2020/11/08052017_LWB_STC.jpg") no-repeat
                                                        center top/cover;'>
                                                    <div class="content">
                                                        <h3 class="roboto-font center-align white section-ft-size regular">
                                                            Build project boards and show case your workmanship. 
                                                        </h3>
                                                           
                                                    </div>
                                                </div>

                                                <div class="slide"  style='background: url("<?php echo get_site_url(); ?>/wp-content/uploads/2020/11/JH.Kinloch.294.jpg") no-repeat
                                                        center top/cover;'>
                                                    <div class="content">
                                                        <h3 class="roboto-font center-align white section-ft-size regular"> Be part of Inspiry trade &  connect your services to home owners.                                                           </h3>
                                                           
                                                    </div>
                                                </div>
                                            

                                        
                                
                                    
                                
                                    </div>
                                        
                                                
                                    <div class="buttons">
                                                    <button id="prev"><i class="fas fa-arrow-left"></i></button>
                                                    <button id="next"><i class="fas fa-arrow-right"></i></button>
                                    </div>
        </div>


               

        <div class="body-contaienr inspiry-trade">
                <!--steps --> 
            <div class="steps-container">
                <div class="section-ft-size roboto-font center-align medium">Sign up & be part of Inspiry & Trade Directory </div>
                <div class="steps">
                    <div>
                        <div class="number">1</div>
                        <div class="font-s-med roboto-font regular">Register & choose your plan</div>
                    </div>     
                    <div>
                        <div class="number">2</div>
                        <div class="font-s-med roboto-font regular">List your business with Inspiry Trade</div>
                    </div>    
                    <div>
                        <div class="number">3</div>
                        <div class="font-s-med roboto-font regular">Build your projects and be seen </div>
                    </div>                                                   
                </div>
            </div>
            
            <!-- slogan--> 
            <div class="slogan">
                <h3 class="roboto-font center-align section-ft-size regular gray"> Be part of Inspiry Project gallery & connecting you to potential customers.</h3>
            </div>
        

            
         <section class="contact-page">
                <!-- USP --> 
                <section class="trade-usp">
                    <div>
                        <i class="fas fa-user-hard-hat"></i>
                        <div class="roboto-font font-s-med center-align">
                            Inspiry Trade connects you with your target audience
                        </div>
                    </div>
                    <div>
                    <i class="fas fa-clipboard-list-check"></i>
                                <div class="roboto-font font-s-med center-align">
                            Be listed on our Trade directory promoting your business and service
                        </div>
                    </div>
                    <div>
                        <i class="fab fa-google"></i>
                                <div class="roboto-font font-s-med center-align">
                            Quality traffic from Google to your projects and listing
                        </div>
                    </div>
                    <div>
                        <i class="fas fa-chart-network"></i>            
                        <div class="roboto-font font-s-med center-align">
                            Become part of our collaborative hub connecting you with our viewers
                        </div>
                    </div>
                </section>
            </section>

            <div class="row-container card-row">
                <div class="card-title">
                    <h3 class="section-ft-size roboto-font regular"> Home Design & Build</h3>
                    <div class="underline-dg"></div>
                </div>
                <div class="card-content">
                    <ul>
                        <li>Architects</li>
                        <li>Construction</li>
                        <li>Designers</li>
                        <li>Painters</li>
                        <li>Plumbers</li>
                        <li>Joinery & Cabinet Makers</li>
                        <li>Wardrobe Makers</li>
                        <li>Roofers</li>
                        <li>Heating & Air Conditioning</li>
                    </ul>
                    <ul>
                        <li>Door Installers</li>
                        <li>Solar Energy Services</li>
                        <li>Tiler & Stone Mason</li>
                        <li>Fireplace Installers</li>
                        <li>Cladding & Exterior Contractors</li>
                        <li>Electricians</li>
                        <li>Floor Coverings & Carpets</li>
                        <li>Window Dressing & Treatments</li>
                    </ul>
                    <ul>
                        <li>Garage Door & Gate services</li>
                        <li>Wallpaper Hanger</li>
                        <li>Wallpaper Treatments</li>
                        <li>Water supply & Tank Services </li>
                        <li>Wifi Installers</li>
                        <li>Upholsterers</li>
                        <li>Insulation</li>
                    </ul>
                </div>
            </div>

            <div class="row-container card-row">
                <div class="card-title">
                    <h3 class="section-ft-size roboto-font regular"> Outdoors & Gardens</h3>
                    <div class="underline-dg"></div>
                </div>
                <div class="card-content">
                   <ul>
                       <li>Driveways & Paving</li>
                       <li>Fencing & Gates</li>
                       <li>Gardner</li>
                       <li>Lawn & Sprinklers</li>
                       <li>Outdoor Lighting</li>
                   </ul>
                   <ul>
                       <li>Pool & Spas</li>
                       <li>Pool Lighting</li>
                       <li>Landscape Architects</li>
                       <li>Landscape Designers</li>
                       <li>Waste Removal</li>
                   </ul>
                   <ul>
                       <li>Hedge Trimming</li>
                       <li>Tree Trimming</li>
                       <li>Mulch Installation</li>
                       <li>Weed Removal</li>
                   </ul>
                </div>
            </div>

            <div class="row-container card-row">
                <div class="card-title">
                    <h3 class="section-ft-size roboto-font regular"> Home Services & Maintenance</h3>
                    <div class="underline-dg"></div>
                </div>
                <div class="card-content">
                   <ul>
                       <li>Arborists & Tree Services</li>
                       <li>Gutter cleaning</li>
                       <li>House washing</li>
                       <li>Deck Cleaning</li>
                   </ul>
                   <ul>
                       <li>Window Cleaning</li>
                       <li>Roof Washing</li>
                       <li>Insect specialists</li>
                       <li>Data Cabling</li>
                   </ul>
                   <ul>
                       <li>Carpet cleaners</li>
                       <li>Wood Floor polishing</li>
                       <li>Floor Cleaners</li>
                       <li>House Cleaning</li>
                   </ul>
                </div>
            </div>


         </div>

         <script>
        const slides = document.querySelectorAll('.slide');
const next = document.querySelector('#next');
const prev = document.querySelector('#prev');
const auto = true; // Auto scroll
const intervalTime = 5000;
let slideInterval;
slides[0].classList.add('current');

const nextSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for next slide
  if (current.nextElementSibling) {
    // Add current to next sibling
    current.nextElementSibling.classList.add('current');
  } else {
    // Add current to start
    slides[0].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

const prevSlide = () => {
  // Get current class
  const current = document.querySelector('.current');
  // Remove current class
  current.classList.remove('current');
  // Check for prev slide
  if (current.previousElementSibling) {
    // Add current to prev sibling
    current.previousElementSibling.classList.add('current');
  } else {
    // Add current to last
    slides[slides.length - 1].classList.add('current');
  }
  setTimeout(() => current.classList.remove('current'));
};

// Button events
next.addEventListener('click', e => {
    console.log('clicked');
  nextSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

prev.addEventListener('click', e => {
  prevSlide();
  if (auto) {
    clearInterval(slideInterval);
    slideInterval = setInterval(nextSlide, intervalTime);
  }
});

// Auto slide
if (auto) {
  // Run next slide at interval time
  slideInterval = setInterval(nextSlide, intervalTime);
}

    </script>

        <?php

    }
get_footer(); 
?>