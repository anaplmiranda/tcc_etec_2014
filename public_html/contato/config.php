<?php function sendMail($assunto,$mensagem,$remetente,$nomeRemetente,$destino,$nomeDestino){
    
     require_once('mailer/class.phpmailer.php');
     $mail = new PHPMailer(); // instancia objeto da classe php
     
     $mail->isSMTP();
     $mail->SMTPAuth = true;
     $mail->Host = 'smtp.gmail.com'; // Servidor de envio
     $mail->SMTPDebug  = 2;      
     $mail->SMTPSecure = "ssl"; // 2 = messages only
     $mail->Port = '465';  // Porta de envio
         
     
     $mail->Username   = "canal.fabricandoaweb@gmail.com"; //email para stmp autenticando
     $mail->Password   = "TESTE2013";     //senha do email
     
     $mail->From = $remetente;//remetente
     $mail->FromName = $nomeRemetente;//remetente nome
     
     
     $mail->isHTML(true);
     
     $mail->Subject = $assunto;//assunto
     $mail->Body = $mensagem;//Mensagem
     $mail->AddAddress($destino,$nomeDestino);// email e nome do destino
     
     if(!$mail->Send()){
         
         echo 'Erro ao enviar, favor entrar em contato pelo seu email';
         
     } else {
         
         echo 'Mensagem ENVIADA COM SUCESSO!';
         
       
     }
     // header('Location: contato_oficial.php');
   
     
}?>
     

    





