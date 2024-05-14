
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
       
        <title></title>
    </head>
    <body bgcolor="#cddedd" >
        
       
    </div>
    <?php
    include_once './main_index.php';


    $n_user = $_POST['n_user'];
    $u_user = $_POST['u_user'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha2 = $_POST['senha2'];
    $sexo = $_POST['sexo'];
    $dt_user = $_POST['dt_user'];
    if (!empty($_POST['cadastro'])) {
        if ($senha != $senha2) {
            $erro = '1';
        }
        if (empty($sexo)) {
            $erro = '2';
        }
        if ($erro == '') {
            $result = mysql_query("INSERT INTO `user` (`id_user`, `n_user`, `u_user`, `senha`, `email`, `dt_user`, `sexo`) VALUES (NULL, '$n_user', '$u_user', '$senha', '$email', '$dt_user', '$sexo')");
            ?>
            <script language="JavaScript">
            top.location = 'feed.php';
            </script>  
            <?php
        }
    }

##################################################################################
    ?>
    <div style="margin-top: -250px">
        <?php
        echo ($erro == 1 ? 'As senhas estão erradas' : ($erro == 2 ? 'Você ñ selecionou o sexo' : ''));
        ?>
    </div>


    <form style="position: relative; left: 900px; top: 400px; font-size: 22px " action="" method="POST">
        Nome completo:
        <input required type="text" name="n_user" value="" />
        <br>
        <br>
        <span style="margin-left: 70px">
            Usuario:
            <input required type="text" name="u_user" value="" />
        </span> 
        <br>
        <br>
        <span style="margin-left: 80px">
            E-mail:
            <input required type="email" name="email" value="" />
        </span>
        <br>
        <br>
        <span style="margin-left: 87px">
            Senha:
            <input required type="password" name="senha" value="" />
        </span>
        <br>
        <br>
        <span style="margin-left: -3px">
            Confirmar senha:
            <input required type="password" name="senha2" value="" />
        </span>
        <br>
        <br>
        <span style="margin-left: -32px">
            Data de nascimento: 
            <input type="date" name="dt_user" value=""/>
        </span>
        <br>
        <br>
        <span style="margin-left: 60px;">
            Masculino 
            <input type="radio" name="sexo" value="MASCULINO">
        </span>
        <br>
        <br>
        <span style="margin-left: 66px">
            Feminino 
            <input type="radio" name="sexo" value="FERMININO"> 
        </span>
        <br>
        <br>
        <input type="image" value="Cadastrar" name="cadastro" src="imagens/cadastrar.png" style="width: 118px; height: 32px; margin-left: 200px"/>


    </form>

    <?php
// put your code here
    ?>
</body>
</html>
