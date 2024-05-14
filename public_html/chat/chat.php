<?php
/*
  Programado por: Gunnar Correa
  Empresa: SatellaSoft
  E-mail:contato@gunnarcorrea.com
  Sites:
  http://www.satellasoft.com
  http://www.gunnarcorrea.com
  Todos os direitos reservados
 */
session_start();
setcookie("cor", $_POST['opColor']); //Gravamos no Cookie cor o valor cor vindo da página login
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat</title>
        <link rel="stylesheet" href="script/style.css" type="text/css" madia="all" />
        <script type="text/javascript" src="script/jquery.js"></script> <!-- importamos o jQuery a nossa página -->
        <!-- Você não precisa entender o código abaixo agora, porém vou explicar o que eçe faz e você pode usar sem complicação -->
        <script type="text/javascript"> 
            $(document).ready(function() { //Quando o documento estiver pronto ele executa os códigos abaixo.
                setInterval(function(){ //Aqui foi criado um temporizador, a cada 3 segundos ele executa o código abaixo
                    $("#dvMensagem").load("script/ler.php") //Dentro da div Mensagem incluo o código php que exibe o texto do txt
                },3000); // 3000 é o mesmo que 3 segundos, recomendo que usem 5 no minimo dependendo do servidor.
                //Envia o formulário sem refresh
                $('#frmChat').submit(function() { //Quando o formulário for enviado os códigos abaixos são executados
                    var dados = $(this).serialize();
                    $.ajax({
                        type: "POST", // Tipo de metodo, que no nosso caso é POST
                        url: "script/gravar.php", //Página para onde os dados serão enviados
                        data: dados,
                        success: function(data) //Se tiver sucesso...
                        {
                            $("#resultado").html(data); //Caso a página gravar.php exiba algum valor ele deve ficar dentro da div resultado
                            document.getElementById("frmChat").reset(); //Resetamos o formulário para apagar o texto, já que não tem Refresh.
                        }
                    });
                    return false;
                });
                //Requisita                           
            });
        </script>
    </head>
    <body>
        <div id="dvCentro">
            <div id="dvMensagem">
            </div>
            <form method="post" action="#" name="frmChat" id="frmChat">
                <p style="color:#FFFFFF; padding:3px;">Mensagem:</p>
                <textarea name="txtMensagem" id="txtMensagem" required></textarea>
                <br />
                <input  type="submit" name="btnSubmit" id="btnSubmit" value="Enviar" />
                <a id="linkSair" href="index.php"><img src="imagem/exit.png" alt="Sair" title="Sair" /> Sair</a>
                <p id="resultado"></p>
            </form>
        </div>  
    </body>
</html>
