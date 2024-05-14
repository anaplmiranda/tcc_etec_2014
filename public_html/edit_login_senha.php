
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

        $senha1 = $_POST['senha1'];
        $senha3 = $_POST['senha3'];


        if (!empty($_POST['salvar'])) {
            if ($senha1 != $senha3) {
                $erro = '1';
            }
            if ($erro == '') {
                $result6 = mysql_query("UPDATE  `user` SET  `senha` =  '$senha1' WHERE  `user`.`id_user` =$id_user;");
                ?>


                <?php
            }
        }

##################################################################################
        ?>
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

        <tr>
         <td class="banner1" style="width: 500px;  height: 300px; padding: 7px;" >

                <form action="" method="POST" enctype="multipart/form-data" >
                    
                    <a style="position: relative; top: -60px; left: 20px" > 
                   
                        <span style="margin-left: 87px">
                            <br>
                            <br>
                           
                            Senha:
                            <br>
                            <input required type="password" name="senha1" value="" />
                        </span>
                        <br>
                        <br>
                        <span style="margin-left: -3px">
                            Confirmar senha:
                            <br>
                            <input required type="password" name="senha3" value="" />
                        </span>
                        <br>
                        <br>
                        <input type="submit" value="Salvar" name="salvar" />

                        </a>
                </form>

            </td>
        </tr>
    </table>
</body>
</html>
