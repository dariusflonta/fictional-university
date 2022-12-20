<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = "info@yourwebsite.com";
$email_subject = "New Form Submission";
$email_body = "User name:$name .\n".
              "User email:$email .\n".
              "User subject:$subject .\n".
              "User message:$message .\n";

$to = "darius.flonta97@yahoo.com";
$headers = "From email@form \r\n";
$headers. =  "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>