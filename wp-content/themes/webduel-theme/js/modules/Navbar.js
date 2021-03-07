const $ = jQuery; 
class Navbar {
    constructor(){
       this.events();
    }

    events(){
        $('.mobile-header .fa-bars').on('click', this.openNav); 
        $(document).on('click', '.fa-times', this.closeNav); 
        this.checkSubmenu(); 
    }
    //check submeny
    checkSubmenu(){
        $('.sub-menu').parent('.menu-item').append('<i class="fal fa-angle-down"></i>'); 
        $('.menu-item').hover( (e)=>{
            $(e.target).children('i').addClass('blue fa-angle-up');
            $(e.target).children('.sub-menu').show();
        }, (e)=>{
            $(e.target).children('i').removeClass('blue fa-angle-up');
            $(e.target).children('.sub-menu').hide();
        })
        $('.menu-item a').hover( (e)=>{
            $(e.target).siblings('i').addClass('blue fa-angle-up');
            $(e.target).siblings('.sub-menu').show();
        }, (e)=>{
            
        })
       
        $('.sub-menu').mouseleave((e)=>{
            $('.sub-menu').hide('slow');
            let v = $(e.target).closest(".sub-menu").length;
            console.log(v);
            if(v===1 ){
                console.log('doesn exist');
            }
         
        })

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