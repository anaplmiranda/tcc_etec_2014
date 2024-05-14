<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main2.css" media="all" rel="stylesheet" type="text/css" />
        <title></title>
        <style>
            
        </style>
    </head>
    <body bgcolor="#cddedd" >
        <?php
        include_once './main.php';
        include_once 'menu.php';
        $situacao = $_REQUEST['situcao'];
        $left=123; 
        $top=105;
        $conte=1;
        $result = mysql_query("SELECT * FROM `cad_livro` inner join marcar on marcar.id_livro=cad_livro.id_livro where situcao='$situacao'");
        while ($list = mysql_fetch_array($result)) {

             ?>
        <img style="position: absolute; left: <?php echo $left ?>px; top: <?php echo $top ?>px; z-index: 1000" src="livro/<?php echo $list['id_livro'].'.'.$list['img_livro'] ?>"  lefgt=""width="80" height="116" alt=""/>
            <?php
            if($conte==7){
                $conte=1;
                $left=25;
                $top=$top+190;
            }
             $left=$left+100;
             $conte++;
       }
        ?>
        <br>
        <!--- ESTANTE DE LIVROS LIDO, LENDO, VAI LER, RELENDO, ABANDONOU-->
        <spam style="position: relative; left: 100px; top: 20px">
                 <img src="imagens/estante2.png" width="724" height="768" alt="estante2"/>
        </spam>
   

       
        
        

            
        
         
        
        
        
        
    </body>
</html>
