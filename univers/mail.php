<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$message=$_POST['message'];

$email_from = "schmitz@live.com.ar";
$email_subject="New Contact";
$email_body="User Name: $name.\n".
            "User Email: $visitor_email.\n".
            "User Message: $message.\n";

$to = 'schmitz@live.com.ar';
$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html")

?>