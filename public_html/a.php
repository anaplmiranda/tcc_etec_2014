
    <?php
    ob_start();
    session_start();
    
    if($_SESSION['ss']['id_user'] < $_REQUEST['id_amigo']){
        $chat= $_SESSION['ss']['id_user'] . "_". $_REQUEST['id_amigo'];
    }
    else{
        $chat= $_REQUEST['id_amigo'] . "_" . $_SESSION['ss']['id_user'];
    }
    setcookie("chat",$chat);
    setcookie("nome", $_SESSION['ss']['n_user']);

    include_once './conect.php';
    ?>
    <iframe style="margin-left: 400px" src="chat/chat.php" width="400" height="600">

  ob_end_flush();