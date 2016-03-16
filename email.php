<?php
$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$myemail = 'leistbau@t-online.de';
// $myemail = 'patrickfieger90@gmail.com';
$to = $myemail;

$email_subject = "Kontaktformular: $name";

$email_body = "Sie haben eine neue Nachricht \n\n".

"Details:\n Name: $name \n ".

"Email: $email_address\n Nachricht: \n $message";

if(mail($to,$email_subject,$email_body)){
	echo "OK!";
}else{
	echo "Error!";
}

?>