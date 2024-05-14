<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main2.css" media="all" rel="stylesheet" type="text/css" />
        <title></title>
        <script>
            function myFunction() {
                document.getElementById("demo").value = "Solicitação enviada.";
            }
        </script>
    </head>
    <body bgcolor="#cddedd" >

        <?php
        include_once './main.php';
        include_once './menu.php';
        include_once './conect.php';
        
        ?>
        <a  style=" position: relative; left: 0px; top:0px ">
            <?php
            $id_user = $_REQUEST['id_user'];
            $comentario = $_POST['comentario'];
            $id_postar = $_POST['id_postar'];
            
            $result = mysql_query("SELECT *  FROM `user` WHERE id_user=$id_user");
            $list_leii = mysql_fetch_array($result);
            
            $result_lee= mysql_query("SELECT * FROM `amizade2` inner join user on user.id_user=amizade2. id_user WHERE amizade2.id_amigo = $id_user");
            
            $id_amigo=$_REQUEST['id_amigo'];
           $id_amizade2=$_REQUEST['id_amizade2'];
            
            ?>

        </div>

        <table style=" position: relative; top: 140px; left: 430px " border="0">
            <tr class="banner1" style="text-align: justify;" >

                <td>
                    <img src="foto_user/<?php echo $list_leii['id_user'] . '.' . $list_leii['img_leitor'] ?>"  lefgt=""width="200" height="250" alt=""/>     
                    <span style="color: #545454" >
                        <br>
                         <br>
                        
                        
                           

                    </span>

                </td>
                <td style="width: 300px; padding: 5px " >

                    <span style="font-family: initial; color: #215E21; font-size: 25px" > 
                        <?php echo $list_leii['n_user'] ?> <br>
                    </span>


                    <span style="font-family: cursive" >
                        
                        <?php
                        echo $list_leii['biografia_user'];
                        ?> 
                      
                    </span>
                </td>
            </tr>
        </table>
     

<div style="position: relative; left: 440px; top: 140px" >

            <form action="" method="POST" target="_blank">
                <input type="hidden" name="id_amigo" value="<?php echo $list_lei['id_user'];?>" />
                <input id="demo" type="submit"onclick="myFunction()" value="Solicitar Amizade" name="" />
            </form>
        </div>

        
<br> <br><br><br><br>
        <center>  
            <div style="width: 500px; top: 10px" >
                <br>
                <br>
                <?php
                $id_postar = $_REQUEST['id_postar'];

                $result5 = mysql_query("SELECT *  FROM `postar` inner join user on postar.id_user=user.id_user where user.id_user=$id_user order by id_postar desc");
                while ($list = mysql_fetch_array($result5)) {
                    ?>  
                    <br>



                    <div class="banner1" style="padding: 5px">
                        <div style="text-align: justify;  " >
                            <table>
                                <tr>
                                    <td>

                                        <img src="foto_user/<?php echo $list['id_user'] . '.' . $list['img_leitor'] ?>" onerror="this.src='imagens/perfil_usuario.png'" width="30" height="30" alt="<?php echo $list['id_user']; ?>"/>
                                    </td>
                                    <td>
                                        <?php
                                        echo $list['n_user'];
                                        ?>        
                                        <br />
                                    </td>
                                </tr>
                            </table>
                            <br> 


                            <?php
                            echo nl2br($list['mensagem']);
                            ?>
                        </div>
                        <?php
                        if (file_exists("postagens/" . $list['id_postar'] . '.' . $list['img_postar'])) {
                            ?>  
                            <img src="postagens/<?php echo $list['id_postar'] . '.' . $list['img_postar']; ?>" width="490" alt=""/>

                            <br> 
                            <br> 

                            <?php
                        }
                        $id_postar = $list['id_postar'];
                        ?>
                        <a name="v<?php echo $id_postar ?>"></a>


                        <a onclick="abreURL('coment.php?id_postar=<?php echo $id_postar ?>', 'GET', 'person<?php echo $id_postar ?>')" href="javascript:">     
                            ver comentários
                        </a>
                        <?php
                        if ($id_postar == $_POST['id_postar_']) {
                            ?>
                            <script type="text/javascript">
                                abreURL('coment.php?id_postar=<?php echo $id_postar ?>', 'GET', 'person<?php echo $id_postar ?>')
                            </script>
                            <?php
                        }
                        ?>                        
                        <BR /><BR />

                        <div id="person<?php echo $id_postar ?>" ></div>
                        <form action="#v<?php echo $id_postar ?>" method="POST">
                            <input style="border: none; width: 100%; margin-top: 10px; margin-bottom: 10px; background-color:#ebfdf7 " type="text" name="comentario" value="" />
                            <input type="hidden" name="id_postar" value="<?php echo $list['id_postar']; ?>" />
                            <input type="hidden" name="id_postar_" value="<?php echo $list['id_postar']; ?>" />
                        </form>
                    </div>
                    <?php
                }
                ?>



            </div>

        </center>
    </div>
</body>
</html>
