<?php

if (isset($_POST['submit'])){
$name = $_POST['name'];
$url = $_POST['url'];

$subject = "New Form Submit";

$email_body = "User Name: $name.\n".
"User Email: $visitor_email.\n".
"User Message: $url.\n";


$mailTo = "sardhot62@gmail.com";
if (mail($to, $subject)){
    $success = "Thank you!"

 }


$headers = "From: $email_from \r\n";

$headers .= "Reply To: $visitor_email \r\n";

mail($to,$url,$email_body,$headers);

header("Location: index.html?mailsend");

}

?>
