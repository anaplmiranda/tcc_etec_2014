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
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />

        <title></title>

    </head>
    <body bgcolor="#cddedd" >



        <?php
        include_once './main.php';
        include './menu.php';
        ?>

        <div style="position: relative; top: 70px; left: 500px" >
        <?php
        $id_livro = $_REQUEST['id_livro'];
        $id_marcar = $_REQUEST['id_marcar'];
        $situacao = $_REQUEST['situacao'];

        mysql_query("REPLACE INTO `marcar` (`id_marcar`, `id_livro`, `id_user`, `situcao`) VALUES ('$id_marcar', '$id_livro', '$id_user', '$situacao');");
        $result2 = mysql_query("SELECT *  FROM `marcar` WHERE `id_livro` = '$id_livro' AND `id_user` = '$id_user'");
        $list2 = mysql_fetch_array($result2);


        $result = mysql_query("SELECT *  FROM `cad_livro` WHERE id_livro=$id_livro");
        $list = mysql_fetch_array($result);



        echo $list['n_livro'];
        ?>
             </div>

        <table style=" position: relative; top:70px; left: 120px " border="0">
            <tr class="banner1" style="text-align: justify;" >
                <td>
                    <img src="livro/<?php echo $list['id_livro'] . '.' . $list['img_livro'] ?>"  lefgt=""width="280" alt=""/>     


                </td>
                <td style="width: 400px; padding: 7px" >

                    <?php
                    echo $list['sinopse'];
                    ?>

                </td>
            </tr>
        </table>

        <div style=" position: relative; top: 65px; left: 130px; " >
            <form name="m_livro" action=" " method="POST">
                <input type="hidden" name="id_marcar" value="<?php echo $list2['id_marcar'] ?>"/>
                <input type="hidden" name="id_livro" value="<?php echo $list['id_livro'] ?>" />
                <select name="situacao" onchange="document.m_livro.submit()">
                    <option></option>
                    <option <?php echo($list2['situcao'] == 'Lido' ? 'selected' : '') ?> >Lido</option>
                    <option <?php echo($list2['situcao'] == 'Lendo' ? 'selected' : '') ?>>Lendo</option>
                    <option <?php echo($list2['situcao'] == 'Relendo' ? 'selected' : '') ?>>Relendo</option>
                    <option <?php echo($list2['situcao'] == 'Vai Ler' ? 'selected' : '') ?>>Vai Ler</option>
                    <option <?php echo($list2['situcao'] == 'Abandonou' ? 'selected' : '') ?>>Abandonou</option>
                </select>
            </form>      
        </div>                        
    </div>

 <div style="position: relative; top: 600px; left: 220px">
        <?php
        
        $id_livro=$_REQUEST['id_livro'];
        include_once './main.php';
        include_once 'menu.php';
        $comentario=$_POST['comentario'];
        
        
        if (!empty($comentario)){
        $result_l=  mysql_query("INSERT INTO `chat_livro` (`id_chat`, `id_livro`, `id_user`, `comentario`) VALUES (NULL, '$id_livro', '$id_user', '$comentario')");
        }
        
        
       $result=  mysql_query("SELECT *  FROM `chat_livro` INNER JOIN user on chat_livro.id_user=user.id_user WHERE id_livro=$id_livro order by id_chat asc");
       while ( $list=  mysql_fetch_array($result)){
           
           echo '<br>'.$list['n_user'].'-'.$list['comentario'];
           
       } 
       
        ?>


        <form method="POST" action="">
            
            <textarea name="comentario" style="height: 70px; width: 500px"></textarea>
            <input type="hidden" name="id_livro" value="<?php echo $id_livro;?>" />
            <input style="position: relative; top: -5px" type="submit" value="Enviar" name="enviar_men" />
                       
        </form>
</div>


</body>
</html>
