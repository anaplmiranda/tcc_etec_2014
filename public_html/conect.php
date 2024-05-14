<?php
//$banco = "edusaber_2";
//$usuario = "edusaber_2";
//$senha = "4@ABrsm";
//$hostname = "dbmy0044.whservidor.com";


$banco = "center_book";
$usuario = "center_book";
$senha = "4@ABrsm";
$hostname = "localhost";

$conn = mysql_connect($hostname,$usuario,$senha); mysql_select_db($banco) or die( "Não foi possível conectar ao banco MySQL");
if (!$conn) {echo "Não foi possível conectar ao banco MySQL.
"; exit;}
?>

