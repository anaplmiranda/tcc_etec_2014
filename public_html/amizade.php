        <?php
        include_once './main.php';
        
        $id_amigo2=$_POST['id_amigo2'];
        $teste=  mysql_query("SELECT *  FROM `amizade1` WHERE `id_user` = '$id_user' AND `id_amigo2` = '$id_amigo2'");
        $teste1=  mysql_num_rows($teste);
        if($teste1==0){
        $result= mysql_query("INSERT INTO `amizade1` (`id_amizade1`, `id_user`, `id_amigo2`) VALUES (NULL, '$id_user', '$id_amigo2');");
        }
        
        
        
        ?>
        <script type="text/javascript">
            close()    
    </script>
   