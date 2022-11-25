<?php

$to = '2020infor32@gmail.com';
$subject = 'Teste';
$message = '´Olá! teste de envio de email php';
$headers = 'From: matheusbezaquiel@gmail.com'. "\r\n". 'Reply-To: matheusbezaquiel@gmail.com';

mail($to, $subject, $message, $headers);

echo "Email enviado";

?>