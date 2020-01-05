<?php
ini_set("SMTP","tls://smtp.gmail.com");
ini_set('smtp_port',587);

$to = "pradhu619@gmail.com";
$subject = "Testing";
$txt = "Hello world!";
$headers = "From: pradhu619@gmail.com" . "\r\n";

mail($to,$subject,$txt,$headers);
?>