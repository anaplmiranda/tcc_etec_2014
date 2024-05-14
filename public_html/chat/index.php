<!--
Programado por: Gunnar Correa
Empresa: SatellaSoft
E-mail:contato@gunnarcorrea.com
Sites:
 http://www.satellasoft.com
 http://www.gunnarcorrea.com
Todos os direitos reservados
*/ -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Chat Sem Refresh - SatellaSoft</title>
        <link rel="stylesheet" href="script/style.css" type="text/css" madia="all" /> <!-- Importamos um documento css a página-->
    </head>
    <body>
        <div id="dvLogin">
            <form action="chat.php" name="frmLogin" id="frmLogin" method="post"> <!-- Criamos um formulário e setamos o post para chat.php -->
                <p>Nick Name:<input type="text" name="txtNickName" id="txtNickName" placeholder="Seu nick name aqui" required/></p> 
                <p>Color:   <select name="opColor"  required>
                        <option value="#000000">Preto</option>
                        <option value="#111111">Cinza</option>
                        <option value="#1E90FF">Azul</option>
                        <option value="#00FF00">Verde</option>
                        <option value="#FFFF00">Amarelo</option>
                        <option value="#8B4513">Marrom</option>
                        <option value="#FF4500">laranja</option>
                        <option value="#FF0000">Vermelho</option>
                        <option value="#FF1493">Rosa</option>
                        <option value="#D02090">Violeta</option>
                        <option value="#A020F0">Roxo</option>
                    </select>
                </p>
                <input  type="submit" name="btnSubmit" id="btnSubmit" value="Entrar" />
            </form>
        </div>  
    </body>
</html>
