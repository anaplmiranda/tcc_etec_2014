
<div style="position: fixed; top: 22px;z-index: 400; width: 101%; height: 50px; left: -1px">

    <img style="width: 100%;height: 130px;margin-top: -38px; " src="imagens/cabecalho2.png" alt="Cabeçalho"/>
    <a style="z-index: 200; position: relative; top: -115px; left: 15%;" href="feed.php">
        <img src="imagens/logo.png" width="222" height="69" alt="logo"/>
    </a>

</div>
<?php
if(empty($u_user)){
?>

        <form style="font-size: 11px; position: fixed;top: 15px; left:  755px; z-index: 403" action="sessao.php" method="POST">
            
        Login:
        <input type="text" name="usuario" value="" />
        Senha:
        <input type="password" name="senha" value=""/>
        <input type="submit" name="login" value="Entrar" />
            <?php
        include_once './main_index.php';
        ?> 
        </form>
        <a style=" position: fixed; left: 1090px; z-index: 402; top: 15px " href="cadastro.php"><img src="imagens/cadastrar.png" width="150" height="37" alt="cadastro"/></a>
<?php
}
else{
?>
        <form style="font-size: 11px; position: fixed;top: 15px; left:  755px; z-index: 403" action="pg_autor_livro.php" method="POST">
            <label>
            <input type="radio" name="buscar" value="autor" checked="checked" />
            Autor
            </label>
            <label>
            <input type="radio" name="buscar" value="livro" />
            Livro
            </label>
            <label>
            <input type="radio" name="buscar" value="leitor" />
            Leitor
             </label>
            <BR />
        Procurar: 
        <input style="border: none; width: 100px" type="text" name="procurar" value="" />
        <input type="submit" value="Buscar" />
            
        </form>
        <div style=" position: fixed; right: -671px;top: 20px; font-size: 18px; color: black ; width: 400px; font-weight: bold">
            <?php echo $n_user; ?>
        </div>
        <a style=" position: fixed; left: 1120px; z-index: 405;top: 20px; font-size: 18px;color: #169691 " href="session_end.php">
            <img src="imagens/sair.png" width="30" height="30" alt="sair"/>
        </a>

       <div style=" position: fixed; left: 1080px; z-index: 805;top: 20px; font-size: 18px; " > 
           <?php 
           $result=  mysql_query("SELECT *  FROM `amizade1` WHERE `id_amigo2` = '$id_user' ");
           
           echo $resultado=  mysql_num_rows($result);
           
           ?>   
               
        </div>  
       
        

        
        <a href="aceitar_amizade.php" style=" position: fixed; left: 1080px; z-index: 405;top: 20px; font-size: 18px;color: #169691 " > 
            <img src="imagens/perfil.png" width="30" height="30" alt="perfil"/>
        </a>
        
        
        <a style=" position: fixed; left: 1036px; z-index: 405;top: 20px; font-size: 18px;color: #169691 ">
            <img src="imagens/Email.png" width="31" height="31" alt="Email"/>
        </a>
        
        <div id="aceitar" style=" position: fixed; left: 1036px; z-index: 405;top: 120px; font-size: 18px;color: #169691 ">
            
         </div>
        
        
<?php
}
?>

<div style="position: absolute; top: 50px;z-index: 100; left: 50%; width: 1100px; margin-left: -550px; height: 30px">




    