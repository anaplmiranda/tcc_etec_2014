<!DOCTYPE html>
<html>
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
        <script type="text/javascript">
            function enviaForm(popup, alt, larg, pos) {
                window.open(popup, 'Popup', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width=' + larg + ', height=' + alt + ', top=100, left=' + pos);

                document.formEnvio.submit();
            }

            function addtel() {
                var html = '', cont;
                cont = document.cadast_alu.cont.value;
                cont++;
                divTag = document.createElement('div')
                divTag.id = cont;
                divTag.innerHTML = '<br /><br /><select name="tipo' + cont + '"><option value="Fixo">Fixo</option><option value="Celular">Celular</option></select>&nbsp;&nbsp;Responsavel:&nbsp;&nbsp;<input type="text" name="resp' + cont + '" value="" />&nbsp;&nbsp;Telefone:&nbsp;&nbsp;<input type="text" name="tel' + cont + '" value="" />'
                //html = '<div id='+cont+'><br /><br /><select name="tipo'+cont+'"><option value="Fixo">Fixo</option><option value="Celular">Celular</option></select>&nbsp;&nbsp;Responsavel:&nbsp;&nbsp;<input type="text" name="resp'+cont+'" value="" />&nbsp;&nbsp;Telefone:&nbsp;&nbsp;<input type="text" name="tel'+cont+'" value="" /></div>';
                //document.getElementById('01').innerHTML=document.getElementById('01').innerHTML+html;
                document.getElementById('01').appendChild(divTag);
                document.cadast_alu.cont.value = cont;
            }
            function removeElement() {
                cont = document.cadast_alu.cont.value;
                var d = document.getElementById('01');

                var olddiv = document.getElementById(cont);

                d.removeChild(olddiv);
                document.cadast_alu.cont.value = cont - 1;

            }


            function abreURL(url, metodo, onde) {
                if (metodo == 'POST') {
                    // metodo post
                    $.post(url, function(data) {
                        // página do carregador (loading)
                        $("#carregador").show();
                        $("#" + onde).load(url);
                    });
                }
                else if (metodo == 'GET') {
                    // metodo get
                    $.get(url, function(data) {
                        // página do carregador (loading)
                        $("#carregador").show();
                        $("#" + onde).load(url);
                    });
                }
            }
            function submitOnClick(formName) {
                document.forms[formName].submit();
            }
        </script>   
        <!-- Dar Refresh na div-->

        <style type="text/css">
            #all{ width:650px;height:600px; }
            #all .left, #all .right{ 
                float:left; 
                width:300px; 
                height:400px;
                border:1px solid #000;	
            }
        </style>
        <title></title>


    </head>


    <body bgcolor="#cddedd">

        <?php
        $coment = $_REQUEST['coment'];
        include_once './main.php';
        include_once 'menu.php';
        include_once 'amigos_chat.php';
        include_once 'chat.php';

        $status = $_POST['status'];

        if (!empty($_POST['comentario'])) {

            $comentario = $_POST['comentario'];
            $id_postar = $_POST['id_postar'];

            $result_comenta = mysql_query("INSERT INTO `comentario` (`id_comentario`, `id_postar`, `id_user`, `comentario`) VALUES ('', '$id_postar', '$id_user', '$comentario');");
        }

        if (!empty($_POST['ganbi'])) {

            $result = mysql_query("INSERT INTO `postar` (`id_postar`, `mensagem`, `id_user`) VALUES ('', '$status', '$id_user');");

            $result = mysql_query("SELECT * FROM postar ORDER BY id_postar DESC LIMIT 1");
            $listar = mysql_fetch_array($result);
            $id = $listar['id_postar'];
            $extensao = strtolower(end(explode('.', $_FILES['flfArquivo']['name'])));
            move_uploaded_file($_FILES["flfArquivo"]["tmp_name"], "./postagens/" . $id . "." . $extensao);
            mysql_query("UPDATE postar SET `img_postar` = '$extensao' WHERE `id_postar` ='$id'");
        }
        ?>


        <!--  fomulario para postagens -->

        <div style="position: relative; top: 80px; left: 350px; width: 10px">
            <form action="" method="POST" enctype="multipart/form-data">


                <textarea style="position: relative; height: 70px; width: 495px; left:-55px " name=status cols=85 rows=6" ></textarea> <br>
                <span class="upload-wrapper">

                    <img class="upload-button" style= "position: relative; left: 250px; top: -0px;" src="imagens/file.png" width="66" height="54" alt="file" alt=” title=” src="Resources/Add.png’ "/>
                    <input class="upload-file" style= "position: relative; left: 40px; top: -15px;" type="file"  name="flfArquivo" value="" />

                </span>
                <br>
                <input type="hidden" name="ganbi" value="1" />
                <input style="position: relative; left: 350px; border: none; top: -69px"
                       type="image" src="imagens/postar.png" width="80" height="30" value="enviar" name="post">
            </form>



        </div>


    <center>  
        <div style="width: 500px; top: -5px" >
            <br>
            <br>
            <?php
            $id_postar = $_REQUEST['id_postar'];

            $result5 = mysql_query("SELECT *  FROM `postar` inner join user on postar.id_user=user.id_user order by id_postar desc");
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
                        <img src="postagens/<?php echo $list['id_postar'] . '.' . $list['img_postar'] ?>" width="490" alt=""/>

                        <br> 
                        <br> 

                        <?php
                    }
                    $id_postar = $list['id_postar'];
                    ?>
                    <a name="v<?php echo $id_postar ?>"></a>


                    <a onclick="abreURL('coment.php?id_postar=<?php echo $id_postar ?>', 'GET', 'person<?php echo $id_postar ?>')" href="javascript:" class="right" >     
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
