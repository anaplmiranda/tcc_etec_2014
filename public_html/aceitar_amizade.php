
<html>
    <head>
        <meta charset="UTF-8">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />

        <title></title>

        


    </head>
    <body bgcolor="#cddedd" >

        <?php
        include_once './main.php';
        include_once './conect.php';

        $result_ami = mysql_query("SELECT * FROM `amizade1` inner join user on user.id_user=amizade1. id_user WHERE amizade1.id_amigo2 = $id_user");
        ?>

        <?php
        $aceitar = $_REQUEST['aceitar'];
        $id_amigo2 = $_REQUEST['id_amigo2'];
        $id_amizade1 = $_REQUEST['id_amizade1'];
        while ($list_ami = mysql_fetch_array($result_ami)) {
            ?>
            <br><br><br><br>
            <?php
            echo $list_ami['n_user'];
            ?>
            <img src="foto_user/<?php echo $list_ami['id_user'] . '.' . $list_ami['img_leitor'] ?>" onerror="this.src='imagens/perfil_usuario.png'" width="50" height="50" alt=""/>


            <br>      <br><br><br><br>

            <a href="aceitar_amizade.php?aceitar=sim&id_amigo2=<?php echo $list_ami['id_user']; ?>&id_amizade1=<?php echo $list_ami['id_amizade1'] ?>">Sim</a>
            <a href="aceitar_amizade.php?aceitar=nao&id_amigo2=<?php echo $list_ami['id_user']; ?>&id_amizade1=<?php echo $list_ami['id_amizade1'] ?>">Não</a><?php echo $list_ami['id_amizade1'] ?>

            <br><br><br><br>

            <?php
            if ($aceitar == 'sim') {

                $result = mysql_query("INSERT INTO `amizade2` (`id_amizade2`, `id_user`, `id_amigo`) VALUES (NULL, '$id_user', '$id_amigo2'), (NULL, '$id_amigo2', '$id_user')");
                $result = mysql_query("DELETE FROM amizade1 WHERE id_amizade1=$id_amizade1 ;");
                ?>

                <?php
            } elseif ($aceitar == 'nao') {

                $result = mysql_query("DELETE FROM amizade1 WHERE id_amizade1=$id_amizade1 ;");
                ?>

                <?php
            }
        }
        ?>




</body>
</html>
