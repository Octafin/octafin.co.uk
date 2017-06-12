<?php
$tel = $_POST['tel'];
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$from = 'Octafin Contact Form'; 
$to = 'leoandrebenezit@gmail.com';
$subject = 'Message from Octafin';

$body = "From: $name\n Tel: $tel \n E-Mail: $email\n Message:\n $message";

?>
