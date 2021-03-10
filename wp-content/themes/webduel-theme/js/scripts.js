import "../style.css"
import Navbar from './modules/Navbar'; 
import Slider from './modules/Slider';
import Styling from './modules/Styling'; 
import Isotope from './modules/Isotope';
import Animations from './modules/Animations';
import FormData from './modules/FormData';
const navbar = new Navbar(); 
const slider = new Slider(); 
const styling = new Styling();
const isotope = new Isotope();
const animations = new Animations();
const formData = new FormData();



console.log('it is working');
lightGallery(document.getElementById('lightgallery'));
// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept()
  }
  