
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


        if (!empty($_POST['excluir'])) {


            $result = mysql_query("DELETE FROM user WHERE id_user=$id_user ; ");
            ?>

            <script language="JavaScript">
                top.location = 'index.php';
            </script>
            <?php
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
            <td class="banner1" style="text-align: justify; width: 500px;  height: 300px; padding: 7px;"">

                <span style="font-family: initial; color: #FF0000; font-size: 20px" >
                    <center >-- ATENÇÃO -- <br></center>
                </span>

                <span style="font-family: inherit; color: #FF0000; font-size: 15px" >
                    <center >-- Leia com atenção antes de excluir sua conta --<br></center>
                </span>

                <br><br>
                Ao excluir sua conta, ela será excluída permanentemente do Centerbook.  
                Após a exclusão, não haverá como recuperar seus dados, uma vez que sua conta 
                for excluída, seus dados serão excluídos definitivamente do nosso sistema. 
                Caso você queira retornar ao Centerbook, você devera realizar um novo cadastro. 
                <br><br>
                <form action="" method="POST" enctype="multipart/form-data" >
                    <div style="position: relative; top: 40px; left: 520px" >
                        <input type="submit" value="Excluir sua conta" name="excluir" />
                    </div>
                </form>        
    </table>


</body>
</html>


