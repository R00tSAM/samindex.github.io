<?php

if (isset($_POST['submit'])){
$name = $_POST['name'];
$url = $_POST['url'];

$email_body = "User Name: $name.\n".
"User Message: $url.\n";


$To = "sardhot62@gmail.com";
if (mail($to, $name, $url)){
    $success = "Thank you!"

 }

$headers = "From: $name \r\n";

mail($to,$url,$email_body,$headers);

header("Location: index.html");

}

?>
