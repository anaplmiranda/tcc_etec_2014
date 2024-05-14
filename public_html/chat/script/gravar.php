<?php
/*
Programado por: Gunnar Correa
Empresa: SatellaSoft
E-mail:contato@gunnarcorrea.com
Sites:
 http://www.satellasoft.com
 http://www.gunnarcorrea.com
Todos os direitos reservados
*/
$diretorio = "../mensagens/" . $_COOKIE['chat'] . ".txt"; //Criamos uma variável  com o diretório e o nome com extensão do arquivo.
$fp = fopen($diretorio, "a+"); //Criamos o arquivo.
$escreve = fwrite($fp, "<b style='letter-spacing:1px; color:".$_COOKIE['cor'].";'>" .  $_COOKIE['nome'] . ": </b> " .$_POST['txtMensagem'] ."\r\n");
//Variável escreve escrevemos no TXT, Perceba que exibimos o valor do nosso Cookie cor e nome, a cor fica dentro de <b> e estilizado.
//Em siguida o código hexadecimal da cor e depois o nome, por ultimo fechamos a tag </b>. Para finalizar escrevemos também a mensagem vinda do textarea txtMensagem
//\r\n faz pular uma linha quando escrevemos
fclose($fp); //Fechamos o arquivo.
?>
