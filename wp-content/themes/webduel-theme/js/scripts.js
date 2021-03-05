import "../style.css"
import Navbar from './modules/Navbar'; 
import Slider from './modules/Slider';
import Styling from './modules/Styling'; 

const navbar = new Navbar(); 
const slider = new Slider(); 
const styling = new Styling();

console.log('it is working');

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept()
  }
  