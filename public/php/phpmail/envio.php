<?php 

require_once 'arquivos/class.phpmailer.php';
require_once 'arquivos/class.smtp.php';

    $assunto = "Redefinir Senha";  
    $mensagem = $_SESSION['mensagem'];
    
    
 $mail = new PHPMailer(true);
 $mail->isSMTP(); // envia por SMTP 
 $mail->CharSet = 'UTF-8';
//  $mail->True;
 $mail->Host = "smtp.gmail.com"; // Servidor SMTP
 $mail->Port = 465; 
 $mail->SMTPAuth = true; // Caso o servidor SMTP precise de autenticação
 $mail->Username = ""; // SMTP username
 $mail->Password = ""; // SMTP password
 $mail->From = ""; // From
 $mail->SMTPSecure = "ssl";
 $mail->FromName = "Login_Nelson" ; // Nome de quem envia o email
 $mail->AddAddress($email, "Cliente"); // Email e nome de quem receberá //Responder
 $mail->WordWrap = 50; // Definir quebra de linha
 $mail->IsHTML = true ; // Enviar como HTML
 $mail->Subject = $assunto ; // Assunto
 $mail->Body = '<br/>' . $mensagem . '<br/>' ; //Corpo da mensagem caso seja HTML
 $mail->AltBody = "$mensagem" ; //PlainText, para caso quem receber o email não aceite o corpo HTML

if(!$mail->Send()) // Envia o email
 { 
 echo "Erro no envio da mensagem";
 } 

 
?>
