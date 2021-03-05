const $ = jQuery; 
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel';

class Slider {
    constructor(){
       this.events();
       
    }

    events(){
        this.oneSlider('.owl-hero-slider');
       this.oneSlider('.owl-reviews'); 
       
    
    }

    //review slider

    //hero slider
    oneSlider(owl){
        $(document).ready(function(){
            $(owl).owlCarousel({
                loop:true,
                margin:10,
                responsiveClass:true,
                autoplay:true,
                responsive:{
                    0:{
                        items:1,
                        nav:true
                    },
                    600:{
                        items:1,
                        nav:false
                    },
                    1000:{
                        items:1,
                        nav:true,
                        loop:false
                    }
                }
            })
          });
    }
    
}

export default Slider; 