<?php
ob_start();
session_start();
include_once './conect.php';
        $usuario=$_POST['usuario'];
        $senha=$_POST['senha'];

        $result=  mysql_query("SELECT u_user, senha, n_user, id_user FROM user WHERE u_user='$usuario' and senha='$senha'");
        $list=  mysql_fetch_array($result);
        if(!empty($list['u_user'])){
            
          $_SESSION['ss']['n_user']= $list['u_user'];
            $_SESSION['ss']['u_user']= $list['n_user'];
            $_SESSION['ss']['id_user']= $list['id_user'];

        }
        
        ob_end_flush();
        
    
        
?>
      <script language="JavaScript">
          top.location = 'feed.php';
        </script>
   