<?php 
    $requestPayload = file_get_contents("php://input"); 
    $object = json_decode($requestPayload); 
		$name = filter_var($object->name, FILTER_SANITIZE_STRING);
		$email = filter_var($object->email, FILTER_SANITIZE_EMAIL);
		$phone = $object->phoneNumber;
		$message =$object->message;
     
		$headers = 'From: ' . $email;

        $msg="NexGen Contact Form \n Name: $name \n Email: $email \nContact Number: $phone \n Message: $message \n";

        echo($msg);
       
        $to='info@greatspicetauranga.co.nz';
        $sub="Contact Form";
        mail($to,$sub,$msg, $headers);

?>