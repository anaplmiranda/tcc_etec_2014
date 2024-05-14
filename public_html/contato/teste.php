<?php

/*apenas dispara o envio da mensagem caso houver/existir $_POST['enviar']*/
if (isset($_POST['enviar']))

{
/*digite os destinatarios separados por virgula*/
$destinatarios = 'marco@teachers.org';

/*usuario ou nome completo da conta criada em sua hospedagem, como por exemplo teste@seudominio*/
$usuario = 'marco@edusaber.net';

/*senha da conta de email acima*/
$senha = '123456';

/*nome do destinatario no qual receberá a mensagem*/
$nomeDestinatario = 'Nome do destinatário';

/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nomeRemetente = $_POST['nomeRemetente'];
$assunto = $_POST['assunto'];
$Message= nl2br("texto vai aqui");

//centerbook.net.br/valida_user.php?key=n978yfgo4nr0rdu8d59qjrm0gb8otv876tv7fv76rv&marco@teachers.org
/***********************************A PARTIR DAQUI NAO ALTERAR************************************/

include_once("class.phpmailer.php");

$To = $destinatarios;
$Subject = $assunto;


$Host = 'smtp.'.substr(strstr($usuario, '@'), 1);
$Username = $usuario;
$Password = $senha;
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom($usuario, $nomeDestinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To, "");

if(!$mail->Send()) {
$mensagemRetorno = 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
} else {
$mensagemRetorno = 'E-mail enviado com sucesso!';
}

}



