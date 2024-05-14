<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body bgcolor="#cddedd" >
        <?php
        include_once './main.php';
        if(!empty($_POST['enviar'])){
            $n_livro=$_POST['n_livro'];
            $id_autor=$_POST['id_autor'];
            $sinopse=$_POST['sinopse'];
            $result_i=  mysql_query("INSERT INTO `cad_livro` (`id_livro`, `n_livro`, `id_autor`, `sinopse`, `sinopse_temp`, `ativ_livro`, `img_livro`) VALUES (NULL, '$n_livro', '$id_autor', '', '$sinopse', '', '')");
              
            $result = mysql_query("SELECT * FROM cad_livro WHERE id_autor='$id_autor' ORDER BY id_livro DESC LIMIT 1");
            $listar=  mysql_fetch_array($result);
            $id_livro=$listar['id_livro'];
            $extensao = strtolower(end(explode('.', $_FILES['flfArquivo']['name'])));
            move_uploaded_file($_FILES["flfArquivo"]["tmp_name"], "./livro/".$id_livro.".".$extensao);
            mysql_query("UPDATE cad_livro SET `img_livro` = '$extensao' WHERE `id_livro` ='$id_livro'");          

        }
        ?>
               <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       
       <div style="position: absolute; top: -1px;z-index: 100; left: 50%; width: 1100px; margin-left: -550px; height: 30px">
       <a>    
       <form style="position: relative; left: 800px; width: 350px; top: 160px" enctype="multipart/form-data"  action=" " method="POST">
       Cadastro de livro
       <br>
       <br>
       Nome livro:
       <input type="text" name="n_livro" value="" />
       <br>
       <br>
       Autor:
       <select name="id_autor">
           <option value="">selecione</option>
<?php
        $result= mysql_query("SELECT * FROM `autor`");
        while ($list=  mysql_fetch_array($result)){
?>
           <option value="<?php echo $list['id']?>"> <?php echo $list['n_autor']?> </option>    
<?php            
        }
?>
          
       </select>
       <br>
       <br>

       Sinopse:
       <textarea name="sinopse" rows="4" cols="20"></textarea>
       <br>
       <br>
       <input type="file" name="flfArquivo" value="" />
       <br>
       <br>
       <input name="enviar" type="submit" value="Enviar" />
       </form>
       </a>    
      </div> 
       
       
<?php
if(!empty($_POST['enviar'])){
?>       
       <div style="position: relative; top: -300px; width: 300px">
           Livro: <?php echo $listar['n_livro']; ?>  
           <BR /><BR />
           Autor:
<?php
$result = mysql_query("SELECT * FROM cad_livro WHERE id_autor='$id_autor' ORDER BY id_livro DESC LIMIT 1");
$listar=  mysql_fetch_array($result);
$id=$listar['id_autor'];
$result1=  mysql_query("SELECT *  FROM `autor` WHERE id = '$id'");
$list1=  mysql_fetch_array($result1);
echo $list1['n_autor']
?>          
           <BR /><BR />
           Sinopse Temporária:
               <BR />
               <?php echo $listar['sinopse_temp'] ?>
           <BR /><BR />
           <img src="livro/<?php echo $listar['id_livro'].'.'.$listar['img_livro'] ?>" width="300" alt="Imagem"/>

       </div>
<?php
}
?>       
    </body>
</html>
