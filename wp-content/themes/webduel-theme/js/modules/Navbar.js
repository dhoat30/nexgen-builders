const $ = jQuery; 
class Navbar {
    constructor(){
       this.events();
    }

    events(){
        $('.mobile-header .fa-bars').on('click', this.openNav); 
        $(document).on('click', '.fa-times', this.closeNav); 
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