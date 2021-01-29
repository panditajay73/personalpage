<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['sub'];
$message = $_POST['msg']

$email_from = 'ap91700692@gmail.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "User Subject: $subject.\n".
                    "User Message: $message.\n";        
                    
$to = "ajaypandey91700@gmail.com";

$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_subject,$headers);
header("Location: index.html");

?>
