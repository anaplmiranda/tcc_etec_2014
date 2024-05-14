
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
        echo '||||||||||' . $email = $_POST['email'];
        echo '||||||||||' . $dt_user = $_POST['dt_user'];
        echo '||||||||||' . $estado = $_REQUEST['estado'];

        if (!empty($_POST['salvar1'])) {

            $result13 = mysql_query("UPDATE `user` SET `email` = '$email', `dt_user` = '$dt_user' WHERE `user`.`id_user` = '$id_user';");
        }

        mysql_query("REPLACE INTO `estado` (`id_estado`, `id_user`, `estado`) VALUES (NULL, '$id_user', '$estado');");
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

                <form action="" method="POST"  >
                    <div style="position: relative; top: -70px; left: -60px;" >

                        <span style="margin-left: 80px">
                            E-mail:
                            <input  type="email" name="email" value="" />
                        </span>
                        <br>
                        <br>
                        <span style="margin-left: 80px">
                            Data de nascimento: 
                            <input type="date" name="dt_user" value=""/>
                        </span>
                        <br>
                        <br>
                        
                        <span  style="margin-left: 80px"  >
                        Estado:
                        <select name="estado" onchange="document.m_user.submit()">
                            <option></option>
                            <option <?php echo($list9['situcao'] == 'AC' ? 'selected' : '') ?> >AC</option>
                            <option <?php echo($list9['situcao'] == 'AP' ? 'selected' : '') ?>>AP</option>
                            <option <?php echo($list9['situcao'] == 'AM' ? 'selected' : '') ?>>AM</option>
                            <option <?php echo($list9['situcao'] == 'PA' ? 'selected' : '') ?>>PA</option>
                            <option <?php echo($list9['situcao'] == 'RO' ? 'selected' : '') ?>>RO</option>
                            <option <?php echo($list9['situcao'] == 'RR' ? 'selected' : '') ?>>RR</option>
                            <option <?php echo($list9['situcao'] == 'TO' ? 'selected' : '') ?>>TO</option>
                            <option <?php echo($list9['situcao'] == 'AL' ? 'selected' : '') ?>>AL</option>
                            <option <?php echo($list9['situcao'] == 'BA' ? 'selected' : '') ?>>BA</option>
                            <option <?php echo($list9['situcao'] == 'CE' ? 'selected' : '') ?>>CE</option>
                            <option <?php echo($list9['situcao'] == 'MA' ? 'selected' : '') ?>>MA</option>
                            <option <?php echo($list9['situcao'] == 'PB' ? 'selected' : '') ?>>PB</option>
                            <option <?php echo($list9['situcao'] == 'PE' ? 'selected' : '') ?>>PE</option>
                            <option <?php echo($list9['situcao'] == 'PI' ? 'selected' : '') ?>>PI</option>
                            <option <?php echo($list9['situcao'] == 'RN' ? 'selected' : '') ?>>RN</option>
                            <option <?php echo($list9['situcao'] == 'SE' ? 'selected' : '') ?>>SE</option>
                            <option <?php echo($list9['situcao'] == 'ES' ? 'selected' : '') ?>>ES</option>
                            <option <?php echo($list9['situcao'] == 'MG' ? 'selected' : '') ?>>MG</option>
                            <option <?php echo($list9['situcao'] == 'RJ' ? 'selected' : '') ?>>RJ</option>
                            <option <?php echo($list9['situcao'] == 'SP' ? 'selected' : '') ?>>SP</option>
                            <option <?php echo($list9['situcao'] == 'PR' ? 'selected' : '') ?>>PR</option>
                            <option <?php echo($list9['situcao'] == 'RS' ? 'selected' : '') ?>>RS</option>
                            <option <?php echo($list9['situcao'] == 'SC' ? 'selected' : '') ?>>SC</option>
                            <option <?php echo($list9['situcao'] == 'GO' ? 'selected' : '') ?>>GO</option>
                            <option <?php echo($list9['situcao'] == 'MT' ? 'selected' : '') ?>>MT</option>
                            <option <?php echo($list9['situcao'] == 'MS' ? 'selected' : '') ?>>MS</option>
                            <option <?php echo($list9['situcao'] == 'DF' ? 'selected' : '') ?>>DF</option>
                        </select>
</span>
                        </a>
                        <input type="submit" value="Salvar" name="salvar1" />
                    </div>
                </form>

            </td>
        </tr>
    </table>
</body>
</html>
