<?php


$to      = 'ti@gr360.com';
$subj = 'Cadastro no site Trading360';
$message = "<h1>Olá Usuario</h1>Voce acabou de se cadastrar no site trading 360<br>
clique no  <a href='trading360.com.br'>link </a> para validar sua conta !!! ";
$body = "<html>\n";
    $body .= "<body style=\"font-family:Verdana, Verdana, Geneva, sans-serif; font-size:12px; color:#666666;\">\n";
    $body .= $message;
    $body .= "</body>\n";
    $body .= "</html>\n";
   
    $headers  = "From: Trading 360<contato@trading360.com.br>\r\n";
    $headers .= "Reply-To: contato@trading360.com.br\r\n";
    $headers .= "Return-Path: contato@trading360.com.br\r\n";
    $headers .= "X-Mailer: Trading360\n";
    $headers .= 'MIME-Version: 1.0' . "\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
   


try {
	//mail($to, $subject, $message, $headers);
    return mail($to, $subj, $body, $headers);
	
} catch (Exception $e) {
	echo $e->getMessage();
}

echo "<hr>";