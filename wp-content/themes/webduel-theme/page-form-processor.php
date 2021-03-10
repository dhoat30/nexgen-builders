<?php 
    $requestPayload = file_get_contents("php://input"); 
    $object = json_decode($requestPayload); 



		$name = test_input($object->name);
        $lastName = test_input($object->lastName);
		$email = test_input($object->email);
		$message = test_input($object->message);
        $phone = test_input($object->phone);

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
            $message = " \n Message: $message \n"; 
        }
        if($phone){
            $phone = " \n phone: $phone";
        }

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
		$headers = 'From: ' . $email;

        $msg="<h1>NexGen Builder Contact Form </h1> $name $lastName $email $message $phone ";

        echo($msg);
       
        $to='designer@webduel.co.nz';
        $sub="Contact Form";
        mail($to,$sub,$msg, $headers);

?>