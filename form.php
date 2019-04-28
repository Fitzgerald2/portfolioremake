<?php
$name=$_POST['name'];
$vistemail=$_POST['email'];
$message=$_POST['message'];


$email_form='william.parrish47@gmail.com';
$email_subject='new form submition';
$email_body="User name: $name.\n";
"User Email: $vistemail.\n".
"User message: $message.\n.";

$to="william.parrish47@gmail.com":
$headers="form: $email_from\r\n";
$headers.="reply to:$vistemail\r\n";

mail($to,$email_subject,$email_body,$headers);


header("location:Contact.html");






 ?>
