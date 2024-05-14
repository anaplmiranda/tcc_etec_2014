
<html>
    <head>
        <meta charset="UTF-8">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
        <title></title>
        <style type="text/css">

            body {
                padding:0px;
                margin:0px;
            }

            #menu ul {
                padding:0px;
                margin:0px;
                float: inherit;
                width: 50%;
                background-color:#cddedd;
                list-style:none;
                font:100% Tahoma;
            }

            #menu ul li { display: inline; }

            #menu ul li a {
                background-color:#cddedd;
                color: #333;
                text-decoration: none;
                border-bottom:3px solid #cddedd;
                padding: 2px 10px;
                float:left;
            }

            #menu ul li a:hover {
                background-color:#a1d1cf;
                color: #6D6D6D;

            }

        </style>

    </head>
    <body bgcolor="#cddedd" >


        <?php
        include_once './main.php';
        if (!empty($_POST['enviar'])) {
            $extensao = strtolower(end(explode('.', $_FILES['flfArquivo']['name'])));
            move_uploaded_file($_FILES["flfArquivo"]["tmp_name"], "./foto_user/" . $id_user . "." . $extensao);
            mysql_query("UPDATE user SET `img_leitor` = '$extensao' WHERE `id_user` ='$id_user'");
        }
        ?>

        <br><br><br><br><br>

    <center>

        <div id="menu">
            <ul>
                <li><a href="edit_dados_pessoais.php">Dados Pessoais</a></li>
                <li><a href="edit_perfil.php">Perfil</a></li>
                <li><a href="edit_login_senha.php">Senha</a></li>
                <li><a href="edit_foto.php">Foto</a></li>
                <li><a href="edit_outros.php">Outros</a></li>
            </ul>
        </div>
    </center>


    <table style=" position: relative; top:10px; left: 150px; width: 700; height: 300" border="0">
        <tr   >               

            <td class="banner1" style="width: 500px;  height: 300px; padding: 7px;" >

                <div style="position: relative; top: 50px; margin-left: 5px; margin-right: 5px" >
                    <img src="foto_user/<?php echo $id_user; ?>.jpg" onerror="this.src='imagens/perfil_usuario.png'" width="190" height="200" alt="<?php echo $list['id_user']; ?>"/>
                </div>

                <form action="" method="POST" enctype="multipart/form-data" >
                    <div style="position: relative; top: -130px; left: 250px" >
                        <br>
                        <br> 
                        <input type="file" name="flfArquivo" value="" />
                        <br>
                        <br>
                        <input name="enviar" type="submit" value="Enviar" />


                    </div>
                </form>

            </td>
        </tr>
    </table>

</body>
</html>
