<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
    <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
    <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
    <link href="script/main2.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="icon" type="image/png" href="imagens/favicon.png" /> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"
            type="text/javascript">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.js"
            type="text/javascript">
    </script>  

    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    session_start();

    include_once './conect.php';

    $mensagem = $_POST['mensagem'];
    if (!empty($_POST['mensagem'])) {
        $sql = "INSERT INTO `chat` (`id_chat`, `id_user`, `id_amigo`, `mensagem`) VALUES (NULL, '" . $_SESSION['ss']['id_user'] . "', '" . $_REQUEST['id_amigo'] . "', '$mensagem');";
        mysql_query($sql);
    }
    ?>
    <div style="padding: 5px 3px 5px 5px;border: 1px solid rgba(0, 39, 121, .76);background-color: #169691;color:#fff;cursor: pointer;"><?php echo $list_amichat['n_user'] ?>&nbsp;           

        <a class="close_btn" href="#" onclick="toggle('chat<?php echo $cont ?>')" >
            <img src="imagens/close_btn.png" width="15" height="14" float="right"  alt="close_btn"/>
        </a></div>


    <div class="message_box">
<?php
$sql = "SELECT *  FROM `chat` WHERE `id_user` = '" . $_SESSION['ss']['id_user'] . "' AND `id_amigo` = '" . $_REQUEST['id_amigo'] . "'";

$resultlll = mysql_query($sql);
while ($listll = mysql_fetch_array($resultlll)) {
    echo $listll['mensagem'].'<br>';
}
?>   
    </div>




    <br>
    <div class="user_info" >
        <form method="POST" action="">
            <input type="hidden" name="contt" value="<?php echo $cont ?>" />        
            <input name="mensagem" type="text" placeholder="Type Message Hit Enter" maxlength="100" />
            <input type="hidden" name="id_amigo" value="<?php echo $_REQUEST['id_amigo'] ?>" />
        </form>
    </div>
    <script>
        toggle('chat<?php echo $cont ?>')
    </script>
</body>
</html>
