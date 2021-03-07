const $ = jQuery; 
import isotope from 'isotope-layout';

class Isotope {
    constructor(){
       this.events();
       
    }

    events(){
         
          $('.filters a').on('click', this.filter);
    }

    filter(e){
        $('.filters a').css('color', '#222222');
        e.preventDefault();
        $(e.target).css('color', '#1B93B2');
        console.log(e.target.className);
        $('.projects').isotope({
            // options
            filter: `.${e.target.className}`
                  });
    }

    
    
}

export default Isotope; 