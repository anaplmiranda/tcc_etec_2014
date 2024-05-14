
<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
                <script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
                <script> $(document).ready(function() {	
	
	//Coloque no id DIV que você deseja exibir
	launchWindow('#dialog1');
	
	//se botão fechar é clicado
	$('.window #close').click(function () {
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//se a máscara é clicado
	$('#mask').click(function () {
		$(this).hide();
		$('.window').hide();
	});			
	

	$(window).resize(function () {
	 
 		var box = $('#boxes .window');
 
        //Get the screen height and width
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
      
        //Set height and width to mask to fill up the whole screen
        $('#mask').css({'width':maskWidth,'height':maskHeight});
               
        //Get the window height and width
        var winH = $(window).height();
        var winW = $(window).width();

        //Set the popup window to center
        box.css('top',  winH/2 - box.height()/2);
        box.css('left', winW/2 - box.width()/2);
	 
	});	
	
});

function launchWindow(id) {
	
		//Get the screen height and width
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
	
		//Set heigth and width to mask to fill up the whole screen
		$('#mask').css({'width':maskWidth,'height':maskHeight});
		
		//transition effect		
		$('#mask').fadeIn(1000);	
		$('#mask').fadeTo("slow",0.8);	
	
		//Get the window height and width
		var winH = $(window).height();
		var winW = $(window).width();
              
		//Set the popup window to center
		$(id).css('top',  winH/2-$(id).height());
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	

}

</script>
         
        <title></title>
    </head>
    <body bgcolor="#cddedd" >
     
      
        
        <div id="boxes"  </div>

<style>

#mask {
  position:absolute;
  left:0;
  top:0;
  z-index:9000;
  background-color:#000;
  display:none;
}
  
#boxes .window {
  position:fixed;
  width:440px;
  height:200px;
  display:none;
  z-index:9999;
  padding:20px;
}


#boxes #dialog1 {
  width:375px; 
  height:203px;
}

#dialog1 .d-header {
  background:url(imagens/login-header.png) no-repeat 0 0 transparent; 
  width:375px; 
  height:150px;
}

#dialog1 .d-header input {
  position:relative;
  top:60px;
  left:100px;
  border:3px solid #cccccc;
  height:22px;
  width:200px;
  font-size:15px;
  padding:5px;
  margin-top:4px;
}
#dialog1 .d-blank {
  float:left;
  background:url(imagens/login-blank.png) no-repeat 0 0 transparent; 
  width:267px; 
  height:53px;
}




</style>
  
<!-- MODAL -->  
<form  action="sessao.php" method="POST">
<div id="dialog1" class="window">
  <div class="d-header">
    <input type="text" name="usuario" value="" onclick="this.value=''"/><br/>
    <input type="password" name="senha" value="" onclick="this.value=''"/>    
  </div>
  <div class="d-blank"></div>
  <div class="d-login"><input type="image" src="imagens/login-button.png"  value="Entrar" name="login"/></div>
</div>
</form>
<!-- Mask to cover the whole screen -->
  <div id="mask"></div>
</div>
        
  

   <?php
        include_once './main_index.php';
        ?>

    </body>
    
</html>
