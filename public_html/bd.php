<?php

$banco = "center_book";
$usuario = "center_book";
$senha = "4@ABrsm";
$hostname = "localhost";

$conn = mysql_connect($hostname,$usuario,$senha);
mysql_select_db($banco) or die ("não foi possível conectar ao banco MySql");
if (!$conn) {echo "Não foi posível conectar ao banco MySql."; exit;}
?>
