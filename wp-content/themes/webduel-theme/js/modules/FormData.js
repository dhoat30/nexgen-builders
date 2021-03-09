const $ = jQuery; 
class FormData {
    constructor(){ 
		this.footerForm = $('#footer-form'); 
		this.events(); 
	}

	events(){ 		
			this.footerForm.on('submit', this.formProcess.bind(this)); 

        
        
	}

	formProcess(e){ 
        console.log('form working')
		e.preventDefault(); 
		let data = e.target; 
		let formData = { 
			name: data[0].value, 
			email: data[1].value,
			message: data[2].value,
			
		}

        console.log(formData)
		const jsonData = JSON.stringify(formData); 
		console.log(jsonData);
		let xhr = new XMLHttpRequest();
        let url = window.location.hostname;
        let filePath; 
        if(url === 'localhost'){
            filePath = `/nexgen/form-processor`
        }
        else{
            filePath = `${url}/wp-content/themes/webduel-theme/form-processor.php`
        }
        console.log(filePath);
		xhr.open('POST',filePath); 

		xhr.setRequestHeader('Content-Type', 'application/json'); 

		xhr.onload = function(){ 
			console.log(xhr.status);
			
			if(xhr.status == 200){ 
				console.log('success')
				console.log(xhr)
				data[0].value =""; 
				data[1].value =""; 
				data[2].value =""; 
				
			}
			else{ 
                console.log('error')
			}
		}

		xhr.send(jsonData);


	}
    
}

export default FormData; 