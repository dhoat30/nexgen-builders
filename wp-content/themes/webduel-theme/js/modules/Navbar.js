const $ = jQuery; 
class Navbar {
    constructor(){
       this.events();
    }

    events(){
        $('.fa-times').hide();
        $('.mobile-header .fa-bars').on('click', this.openNav); 
        $(document).on('click', '.fa-times', this.closeNav); 
        this.checkSubmenu(); 
    }
    //check submeny
    checkSubmenu(){
        var mq = window.matchMedia("(max-width: 1350px)"); 
       
            $('.sub-menu').parent('.menu-item').append('<i class="fal fa-angle-down"></i>'); 
            $('.menu-item').hover(function(e) {
                $(this).children('i').toggleClass('blue fa-angle-up');
                $(this).children('ul').stop(true, false, true).slideToggle(300);
            });
        
        

    }

    openNav(){
        $('.navbar-container').slideDown();
        $('.fa-times').show();
        $('.fa-bars').hide();
    }
    closeNav(){
        console.log('close');
        $('.navbar-container').slideUp();
        $('.fa-times').hide();
        $('.fa-bars').show();
    }
}

export default Navbar; 