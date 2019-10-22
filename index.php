<?php
require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer();

$mail->IsSMTP(); // Define que a mensagem ser� SMTP
$mail->Host = ""; // Endere�o do servidor SMTP
$mail->SMTPAuth = true; // Autentica��o (True: Se o email ser� autenticado | False: se o Email n�o ser� autenticado)
$mail->Username = ''; // Usu�rio do servidor SMTP
$mail->Password = ''; // A Senha do email indicado acima
/////////////////////////////////////////////////////
$mail->Port = 587;
$mail->From = "no-reply@pdominio.com.br";
$mail->FromName = "no-reply";
////////////////////////////////////////////////////
$mail->AddAddress('mattbmoller@gmail.com', 'Nome do Destinat�rio');
$mail->IsHTML(true); // Define que o e-mail ser� enviado como HTML
////////////////////////////////////////////////////
$mail->Subject  = "Mensagem Teste"; // Assunto da mensagem
$mail->Body = 'Aqui vem a mensagem a ser enviada, em HTML ou n�o.';
$enviado = $mail->Send();


if ($enviado) {
	echo "E-mail enviado com sucesso!\n";
} else {
	echo "N�o foi poss�vel enviar o e-mail, devido ao erro de: " . $mail->ErrorInfo . "\n";
}
