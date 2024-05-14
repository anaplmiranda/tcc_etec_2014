<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <?php
        include_once './conect.php';
        if (!empty($_POST['enviar'])) {
            $n_autor = $_POST['n_autor'];
            $biografia = $_POST['biografia'];

            $result_i = mysql_query("INSERT INTO `autor` (`id`, `n_autor`, `biografia_temp`, `ativ_autor`) VALUES (NULL, '$n_autor', '$biografia', '1');");


            $result = mysql_query("SELECT * FROM autor ORDER BY id DESC LIMIT 1");
            $listar = mysql_fetch_array($result);
            $id = $listar['id'];
            $extensao = strtolower(end(explode('.', $_FILES['flfArquivo']['name'])));
            move_uploaded_file($_FILES["flfArquivo"]["tmp_name"], "./autor/" . $id . "." . $extensao);
            mysql_query("UPDATE autor SET `img_autor` = '$extensao' WHERE `id` ='$id'");
            ?>
        <div>
            Obrigado por sua colaboração, a biografia esta em analise logo publicaremos.  
        </div>
    <?php
}
?> 

</head>
<body bgcolor="#cddedd" >
<?php
include_once './main.php';
?>
    <BR /><BR /><BR /><BR /><BR /><BR /><BR />
    <form action="" method="POST" enctype="multipart/form-data" >
        cadastro de autor 
        <br>
        <br>
        nome:
        <input type="text" name="n_autor" value="" />
        <br>
        <br>
        biografia:
        <textarea name="biografia" rows="4" cols="20"></textarea>
        <br>
        <br>
        <input type="file" name="flfArquivo" value="" />
        <br>
        <br>
        <input name="enviar" type="submit" value="Enviar" />
    </form>
<?php
if (!empty($_POST['enviar'])) {
    ?>       
        <div style="position: relative; top: -300px; width: 600px">
            Livro: <?php echo $listar['n_autor']; ?>  
            <BR /><BR />
            Autor:
    <?php
    $result = mysql_query("SELECT * FROM autor WHERE id='$id' ORDER BY id DESC LIMIT 1");
    $listar = mysql_fetch_array($result);
    $id = $listar['id'];
    $result1 = mysql_query("SELECT *  FROM `autor` WHERE id = '$id'");
    $list1 = mysql_fetch_array($result1);
    echo $list1['n_autor']
    ?>          
            <BR /><BR />
            Sinopse Temporária:
            <BR />
    <?php echo $listar['sinopse_temp'] ?>
            <BR /><BR />
            <img src="autor/<?php echo $listar['id'] . '.' . $listar['img_autor'] ?>" width="300" alt="Imagem"/>

        </div>
    <?php
}
?>        

</body>
</html>
