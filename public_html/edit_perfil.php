
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
        $biografia_user = $_POST['biografia_user'];
        $n_user = $_POST['n_user'];

        if (!empty($_POST['salvar'])) {

            mysql_query("UPDATE  `user` SET  `n_user` =  '$n_user', `biografia_user` = '$biografia_user' WHERE  `user`.`id_user` =$id_user;");
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
               
                <span style="font-family: initial; color: #FF0000; font-size: 15px" >
                    <center >  Comente um pouco sobre você.<br></center>
                </span>
                               
              
                <form action="" method="POST" enctype="multipart/form-data" >
                  <a style="position: relative; top: -10px; left: 20px" > 
<br>
<br>
<br>
                        Alterar Nome:
                        <br>
                        <input required type="text" name="n_user" value="" />
                        <br>
                        <br>
                        Alterar Biografia:
                        <br>
                        <textarea name="biografia_user" rows="5" cols="20">
                        </textarea>
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
