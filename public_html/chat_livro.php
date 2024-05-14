<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
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
            function enviaForm(popup,alt,larg,pos){ 
                window.open(popup,'Popup','toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=no, copyhistory=yes, width='+larg+', height='+alt+', top=100, left='+pos);  
    
                document.formEnvio.submit();  
            }

            function addtel(){
                var html = '', cont;
                cont = document.cadast_alu.cont.value;
                cont++;
                divTag = document.createElement('div')
                divTag.id = cont;
                divTag.innerHTML = '<br /><br /><select name="tipo'+cont+'"><option value="Fixo">Fixo</option><option value="Celular">Celular</option></select>&nbsp;&nbsp;Responsavel:&nbsp;&nbsp;<input type="text" name="resp'+cont+'" value="" />&nbsp;&nbsp;Telefone:&nbsp;&nbsp;<input type="text" name="tel'+cont+'" value="" />'
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
                document.cadast_alu.cont.value = cont-1;

            }
    
    
            function abreURL(url,metodo,onde){
                if(metodo=='POST'){
                    // metodo post
                    $.post(url, function(data) {
                        // página do carregador (loading)
                        $("#carregador").show();
                        $( "#"+onde).load(url);
                    });
                }
                else if(metodo=='GET'){
                    // metodo get
                    $.get(url, function(data) {
                        // página do carregador (loading)
                        $("#carregador").show();
                        $( "#"+onde).load(url);
                    });
                }
            }    
            function submitOnClick(formName){
                document.forms[formName].submit();
            }
        </script>       
        <title></title>


    </head>
    <body bgcolor="#cddedd">
        <div style="position: relative; top: 200px">
        <?php
        
        $id_livro=$_REQUEST['id_livro'];
        include_once './main.php';
        include_once 'menu.php';
        $comentario=$_POST['comentario'];
        
        
        if (!empty($comentario)){
        $result_l=  mysql_query("INSERT INTO `chat_livro` (`id_chat`, `id_livro`, `id_user`, `comentario`) VALUES (NULL, '$id_livro', '$id_user', '$comentario')");
        }
        
        
       $result=  mysql_query("SELECT *  FROM `chat_livro` INNER JOIN user on chat_livro.id_user=user.id_user WHERE id_livro=$id_livro order by id_chat asc");
       while ( $list=  mysql_fetch_array($result)){
           
           echo '<br>'.$list['n_user'].'-'.$list['comentario'];
           
       } 
       
        ?>


        <form method="POST" action="">
            
            <textarea name="comentario" style="height: 70px; width: 500px"></textarea>
            <input type="hidden" name="id_livro" value="<?php echo $id_livro;?>" />
            <input type="submit" value="Enviar" name="enviar_men" />
        </form>
</div>

</div>
</body>
</html>
