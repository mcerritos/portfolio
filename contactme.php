<?php

#Receive user input
$name= $_POST['name']
$email_address = $_POST['email'];
$subject= $_POST['subject']
$message = $_POST['message'];

#Filter user input
function filter_email_header($form_field) {  
return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
}

$email_address  = filter_email_header($email_address);

#Send email
$headers = "From: $name";
$sent = mail('leclecticat@gmail.com', $subject, $message, $headers);

?>