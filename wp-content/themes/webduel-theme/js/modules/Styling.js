const $ = jQuery; 


class Styling {
    constructor(){
       this.events();
       
    }

    events(){
        $('.content p').addClass('paragraph light grey');
        $('.single-services-section p').addClass('paragraph light grey');
    }

    
    
}

export default Styling; 