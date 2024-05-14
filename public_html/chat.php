<script type="text/javascript" src="js/chat/jquery-1.9.0.min.js"></script>
<style>
    .cha {
        background: whitesmoke;
        width: 260px;
        height: 300px;
        left: 1000px;
        overflow: hidden;
        position: fixed;
        bottom: 0;
        right: 20%;
        z-index:9;
    }
.user_info input {
	width: 98%;
	height: 25px;
	border: 1px solid #CCC;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.cha .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
        margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}

</style>
<script>
    function toggle(obj) {
        var el = document.getElementById(obj);
        if ( el.style.display !== 'none' ) {
            el.style.display = 'none';
        }
        else {
            el.style.display = '';
        }
    }
</script>

<br><br><br><br><br><br>

<?php
$mensagem=$_POST['mensagem'];
    if (!empty($_POST['mensagem'])) {
        $sql="INSERT INTO `chat` (`id_chat`, `id_user`, `id_amigo`, `mensagem`) VALUES (NULL, '$id_user', '".$_POST['id_amigo']."', '$mensagem');";
        mysql_query($sql);
      
         
    }

           
          
           
         
    
    
 $cont=1;
 $result_listachat = mysql_query("SELECT *  FROM `amizade2` inner join user on amizade2.id_user=user.id_user order by id_amizade2 desc");
            while ($list_amichat = mysql_fetch_array($result_listachat)) {              
?>
      
      <br>
      <div id="ch"></div>
      <div class="cha" id="chat" style="display: <?php echo ($_POST['contt']==$cont?'none':'') ?>">
          <div style="padding: 5px 3px 5px 5px;border: 1px solid rgba(0, 39, 121, .76);background-color: #169691;color:#fff;cursor: pointer;"><?php echo $list_amichat['n_user']?>&nbsp;           
          
          <a class="close_btn" href="#" onclick="toggle('chat<?php echo $cont ?>')" >
            <img src="imagens/close_btn.png" width="15" height="14" float="right"  alt="close_btn"/>
          </a></div>
          
          
      <div class="message_box">
          <?php
    $sql="SELECT *  FROM `chat` WHERE `id_user` = $id_user AND `id_amigo` = '".$list_amichat['id_amigo']."'";
    
    $resultlll=  mysql_query($sql);
       while ( $listll=  mysql_fetch_array($resultlll)){         
           echo $listll['mensagem'];
       }
       ?>   
    </div>
          
          
          
          
         <br>
          <div class="user_info" >
              <form method="POST" action="">
                  <input type="hidden" name="contt" value="<?php echo $cont ?>" />        
          <input name="mensagem" type="text" placeholder="Type Message Hit Enter" maxlength="100" />
          <input type="hidden" name="id_amigo" value="<?php echo $list_amichat['id_amigo']?>" />
              </form>
          </div>
          <script>
          toggle('chat<?php echo $cont ?>')
      </script>
      </div>      
<?php

$cont++;
}
?>
