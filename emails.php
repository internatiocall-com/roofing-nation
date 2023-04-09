<?php

// contact form email
//var_dump($_POST);

$service = $_POST['service'];
$client = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
//$zipCode = $_POST['Zip'];
//$location = $_POST['Location'];
//$emergency = $_POST['emergency'];
//$isHomeowner = $_POST['Homeowner'];
$comments = $_POST['message'];

// email to send to company email

$to = "info@roofing-nation.com";
$subject = "New Lead";
$message = "Service: $service 
        \r  Client: $client 
        \r  Email: $email 
        \r  Phone: $phone 
        \r  Comments: $comments";

$headers = "From: $to";

// email to send to client

$toClient = $email;
$subjectClient = "Thank you for contacting Affordable Roofing";
$messageClient = "Thank you for contacting Affordable Roofing. We will get back to you as soon as possible.";
$headersClient = "From: info@roofaffordable.com";

// send email to company

$empresa = mail($to, $subject, $message, $headers); 

// send email to client

$cliente = mail($toClient, $subjectClient,$headersClient, $messageClient );

if( $empresa === false){
      
        $mesaje = ' Uff error sending message, please try again';
        $status = 'error';
        $code = false;
        $data = [
            'status' => $status,
            'mesaje' => $mesaje,
            'code'=> $code   
        ];
        echo   json_encode($data);
       
}else{
        $mesaje = 'Roofing Specialist will be contacting you shortly!!';
        $status = 'Sussefull !!';
        $code = true;
        $data = [
            'status' => $status,
            'mesaje' => $mesaje,
            'code'=> $code    
        ];
        echo   json_encode($data);
}



