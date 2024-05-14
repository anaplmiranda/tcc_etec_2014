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
if(file_exists($diretorio)){ // Se o arquivo existir executa os códigos abaixo.
$fp = fopen($diretorio,'r'); // Abrimos o arquivo para leitura
//lemos o arquivo
$texto = fread($fp, filesize($diretorio));
//transformamos as quebras de linha em etiquetas <br>
$texto = nl2br($texto);
//Exibimos o valor do TXT
echo $texto;
}
?>