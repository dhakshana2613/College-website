<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = 'myinfo@website.com';

$email_subject = 'New Form Submission';

$email_body = "User name: $name.\n".
"User email: $visitot_email.\n".
"Subject: $subject.\n".
"User Message: $message.\n".;

$to = 'dhakshanamoorthy2624@gmail.com'

$headers = "Form: $email_form \r\n"

$headers = "Reply-To: $visitor_email \r\n"

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");


?>