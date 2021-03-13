<?php 
    $requestPayload = file_get_contents("php://input"); 
    $object = json_decode($requestPayload); 



		$name = test_input($object->name);
        $lastName = test_input($object->lastName);
		$email = test_input($object->email);
		$message = test_input($object->message);
        $phone = test_input($object->phone);
        $service = test_input($object->service);
        $formName = "Contact Form"; 

        if($name){
            $name = "\n Name: $name";
        }
        if($lastName){
            $lastName = " \n Last Name: $lastName";
        }
        if($email){
            $email = "\n Email: $email"; 
        }
        if($message){
            $message = " \n Message: $message"; 
        }
        if($phone){
            $phone = " \n Phone: $phone";
            $formName = "Contact Form";
        }
        if($service){
            $service = " \n Service: $service";
            $formName = "Free Consultation Form"; 
        }
       

        

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
		$headers = 'From: ' . $email;

        $msg="NexGen Builder $formName \n\n $name $lastName $email $phone $message $service";

        echo($msg);
       
        $to='designer@webduel.co.nz';
        $sub=$formName;
        mail($to,$sub,$msg, $headers);

?>