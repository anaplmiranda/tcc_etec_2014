    

<html>
<head>

	<title> Entre em Contato </title>
	
</head>

<body>

<h2><strong>ENTRE EM CONTATO CONOSCO</strong></h2>
            			
                   <form name="teste" action="" method="post">
			
			<?php if(isset($_POST['btn_enviar'])){
                            
                             //   unset($_SESSION['enviado']);
				$assunto = strip_tags(trim($_POST['txt_assunto']));
				$nome = strip_tags(trim($_POST['txt_nome']));
			
				$email = strip_tags(trim($_POST['txt_email']));
				$mensagem = strip_tags(trim($_POST['txt_msg']));
			
				//Validando email
				
				if($assunto =='' || $nome =='' || $assunto =='' || $email =='' || $mensagem ==''){
				
					echo 'Campos em branco';				
				
				} else if(!preg_match("/^[a-z0-9_\.\-]+@[a-z0-9_\.\-]*[a-z0-9_\-]+\.[a-z]{2,4}$/i", $email)) {
				
					echo 'Email invalido';
				
					} else {
                                            require('config.php');
						sendMail($assunto,$mensagem,$nome,$email,'canal.fabricandoaweb@gmail.com','Fabricando a Web - Contato');
						sendMail('Recebemos sua mensagem','Obrigado pelo contato, responderemos em breve','canal.fabricandoaweb@gmail.com','Fabricando a Web - Contato',$email,$nome);
						}
				
				
                        }
                        
                        
                        ?>
			
		   
		   
                    Nome:  	
                    <br />                    
                   <input name="txt_nome" type="text" value="<?php if(isset($nome)) { echo $nome;} ?>"/>
                   <br/>
				   
                    <br/>
                    Email: <br />                    
                  
                    <input name="txt_email" type="text"  value="<?php if(isset($email)) { echo $email;} ?>" />
                    <br/>
                 
                    <br/>
                    Assunto:             
                   
                    <br/>
     
                    <input name="txt_assunto" type="text"  value="<?php if(isset($assunto)) { echo $assunto;} ?>"/>
                    <br/>
                
                	<br/>
                       Mensagem:        
                
                    <br/>
                    <textarea rows="10" name="txt_msg" type="text" value="<?php if(isset($mensagem)) { echo $mensagem;} ?>"/>
                    </textarea>
                    <br/>
                
                
                

                     <br/>
                
                   <input type="submit" name="btn_enviar" value="Enviar" />
                    
         
  
            
               </form>        





</body>


</html>
	

