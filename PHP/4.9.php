<?php
$to_email = "recipient@example.com";
$subject = "Test Email";
$body = "This is a test email";

if (mail($to_email, $subject, $body)) {
    echo "Email sent successfully to $to_email";
} else {
    echo "Email sending failed...";
}
/*
mail(): This PHP function is used to send an email. 
It takes at least three parameters: the recipient's email address, the subject, and the body/content.
 Optionally, you can pass additional headers as well.
*/