<?php
$name       = @trim(stripslashes($_POST['Имя'])); 
$from       = @trim(stripslashes($_POST['Почта'])); 
$subject    = @trim(stripslashes($_POST['Тема'])); 
$message    = @trim(stripslashes($_POST['Письмо'])); 
$to   		= 'aralmi993@gmail.com';  //replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);

die;