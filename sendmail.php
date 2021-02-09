<?php


$to_email = "nishant.pantha.bca075@kathford.edu.np";
$subject = "Simple Email Test via PHP";
$body = "Hi, This is test email send by PHP Script";
$headers = "From: bibek.dhungana.bca075@kathford.edu.np";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

?>