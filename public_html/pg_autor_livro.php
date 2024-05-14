<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main2.css" media="all" rel="stylesheet" type="text/css" />
        <title></title>

    </head>
    <body bgcolor="#cddedd" ><br><br><br><br><br><br><br><br>
         <?php
        include_once './main.php';
        include_once './menu.php';
     ?>

      
        
         <div style=" position: relative; left: 5px; top:100px ">
        
<?php
include_once './conect.php';
 $buscar=$_POST['buscar'];
 $procurar=$_POST['procurar'];
 if($buscar=='autor'){
     
 
 $result=  mysql_query("SELECT *  FROM `autor` WHERE n_autor like '%$procurar%'");
 while ($list=  mysql_fetch_array($result)){
      ?>
                <a style=" position: relative; left: 0px; top:11px "  >
                    <img src="autor/<?php echo $list['id'].'.'.$list['img_autor'] ?>"  lefgt=""width="200" height="300" alt=""/>
                </a>             
             <a style ="position: relative; left: 300px; top:-80px" href="pg_autor.php?id=<?php echo $list['id']?>">
                 <?php echo $list['n_autor']?>
             </a>       
             


                    <br><br>
     <?php
 }
 
 

 }
 elseif ($buscar=='livro') {
 

    $result=  mysql_query("SELECT *  FROM `cad_livro` WHERE n_livro like '%$procurar%'");
 while ($list=  mysql_fetch_array($result)){
     
     
     ?>
                <a style=" position: relative; left: 0px; top:11px "  >
                    <img src="livro/<?php echo $list['id_livro'].'.'.$list['img_livro'] ?>"  lefgt=""width="200" height="300" alt=""/>
                </a>                    
                    <a style ="position: relative; left: 300px; top:-80px" href="pg_livro.php?id_livro=<?php echo $list['id_livro']?>">
                        <?php echo $list['n_livro']?>
                    </a>
                    
                    

                    <br><br>
     <?php
     
 } 
 
}

if ($buscar=='leitor') {
 

    $result=  mysql_query("SELECT *  FROM `user` WHERE n_user like '%$procurar%'");
 while ($list=  mysql_fetch_array($result)){
     
     
     ?>
                    <br><br><br><br>
                    <a style=" position: relative; left: 0px; top:11px "  >
                        <img src="foto_user/<?php echo $list['id_user'].'.'.$list['img_leitor'] ?>"  lefgt=""width="200" height="200" alt=""/> 
                    </a>
                    <a style ="position: relative; left: 300px; top:-80px" href="leitor.php?id_user=<?php echo $list['id_user']?>">
                        <?php echo $list['n_user']?>
                    </a>
                  <br><br>

     <?php
     
 } 
 
}
?>
        
        </div>
           
   


    </body>
</html>
