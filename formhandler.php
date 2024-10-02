<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['Message'];


$email_from = 'info@basit_tech.com'

$email_subject = 'New Form Submission'

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                    "Subject: $subject.\n".
                    "User Message: $message .\n";

$to = 'abdulbasitpiralizai@gmail.com';

$headers = "From: $email_from \r\n";

$headers .= "Reply=To: $visitor_email";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>