<?php 
$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 
$myemail = 'patrickfieger90@gmail.com';
$to = $myemail;
 
$email_subject = "Kontaktformular: $name";
 
$email_body = "Sie haben eine neue Nachricht . ".
 
"Details:\n Name: $name \n ".
 
"Email: $email_address\n Nachricht: \n $message";
 
$headers = "From: $myemail\n";
 
$headers .= "Reply-To: $email_address";
 
if(!mail($to,$email_subject,$email_body,$headers)){
	echo "Error!";
}else{
	echo "OK!";
}

?>