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


let $ = jQuery;
lightGallery(document.getElementById('lightgallery'));
// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}


// typewriter effect
document.addEventListener('DOMContentLoaded', function (event) {
  // array with texts to type in typewriter
  // get json array from a title on a web page
  let jsonArray = $('.typewriter-query-container div').attr('data-title');

  if (jsonArray) {
    let dataText = JSON.parse(jsonArray);
    // type one text in the typwriter
    // keeps calling itself until the text is finished
    function typeWriter(text, i, fnCallback) {
      // chekc if text isn't finished yet
      if (i < (text.length)) {
        // add next character to h1
        document.querySelector(".typewriter-title").innerHTML = text.substring(0, i + 1) + '<span aria-hidden="true"></span>';

        // wait for a while and call this function again for next character
        setTimeout(function () {
          typeWriter(text, i + 1, fnCallback)
        }, 50);
      }
      // text finished, call callback if there is a callback function
      else if (typeof fnCallback == 'function') {
        // call callback after timeout
        setTimeout(fnCallback, 1200);
      }
    }

    // start a typewriter animation for a text in the dataText array
    function StartTextAnimation(i) {
      if (typeof dataText[i] == 'undefined') {
        setTimeout(function () {
          StartTextAnimation(0);
        }, 1000);
      }
      // check if dataText[i] exists
      if (i < dataText[i].length) {
        // text exists! start typewriter animation
        typeWriter(dataText[i], 0, function () {
          // after callback (and whole text has been animated), start next text
          StartTextAnimation(i + 1);
        });
      }
    }
    // start the text animation
    StartTextAnimation(0);
  }

});
