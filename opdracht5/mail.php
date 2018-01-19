<?php

$to = '24542@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];


$headers = 'From: ' . $_POST['from'];

//Mail versturen
mail($to, $subject, $message, $headers);
