import { data } from "jquery";

const $ = jQuery; 
class FormData {
    constructor(){ 
		this.footerForm = $('#footer-form'); 
		this.events(); 
	}

	events(){ 		
			this.footerForm.on('submit', this.footerFormProcessor.bind(this)); 
			$('#contact-page-form').on('submit', this.contactForm.bind(this)); 
			$('#free-consultation').on('submit', this.freeConsultation.bind(this)); 
	}
	freeConsultation(e){
		
		let dataObj = this.getFormData(e, "#free-consultation"); 
		this.sendRequest(dataObj, 'form-processor', "#free-consultation"); 
	}
	contactForm(e){
		let dataObj = this.getFormData(e, "#contact-page-form"); 
		this.sendRequest(dataObj, 'form-processor', "#contact-page-form"); 
	}
	footerFormProcessor(e){ 
		let dataObj = this.getFormData(e, "#footer-form"); 
		this.sendRequest(dataObj, 'form-processor', "#footer-form"); 
	}

	sendRequest(dataObj, fileName, formID){
		console.log(dataObj);
		const jsonData = JSON.stringify(dataObj); 
		let xhr = new XMLHttpRequest();
        let url = window.location.hostname;
        let filePath; 
        if(url === 'localhost'){
            filePath = `/nexgen/${fileName}`
        }
        else{
            filePath = `https://nexgenbuilders.co.nz/${fileName}`
        }
        console.log(filePath);
		xhr.open('POST',filePath); 

		xhr.setRequestHeader('Content-Type', 'application/json'); 

		xhr.onload = function(){ 
			$(`${formID} p`).html('');
			if(xhr.status == 200){ 
				console.log(xhr);
				$($(formID).prop('elements')).each(function(i){
					if(this.value !== 'Submit'){
						this.value = "";
					}
				});
				
				$(formID).append('<p class="success-msg paragraph regular">Thanks for contacting us!</p>');
			}
			else{ 
				$(formID).append('<p class="error-msg paragraph regular">Something went wrong. Please try again!</p>');
			}
		}

		xhr.send(jsonData);
	}

	getFormData(e, formID){
		e.preventDefault(); 
		var dataObj={};
		$($(formID).prop('elements')).each(function(i){
			dataObj[$(this).attr('name')] = this.value;
		});
		return dataObj; 
	}
    
}

export default FormData; 