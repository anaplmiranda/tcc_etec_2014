<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main2.css" media="all" rel="stylesheet" type="text/css" />
        <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-touch-fullscreen" content="yes">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.pack.js"></script>
        
       
        
        <title></title>
                <!-- jQuery -->
                <script src="js/livro biblioteca/jquery.min.js"></script>
		
		<!--  Flippage -->
                <script src="js/livro biblioteca/jquery.flippage.min.js"></script>
                <link href="js/livro biblioteca/jquery.flippage.css" type="text/css" rel="stylesheet" />
    
                
    
                
                <style>
			body > div {
				display: block;
				margin-left: 50px;
				margin-top: 50px;
			}

			
			.exemples > div {
			background-color: white;
			}
		</style>
		<script>
			(function($){
				$(document).ready(function(){
					$('.exemples:eq(0)').flippage({
						width: 800,
						height: 533
					});
					
					$('.exemples:eq(1)').flippage({
						width: 400,
						height: 533
						
					});
				});
			})(jQuery);
		</script>
                
                <script>

$(document).ready(function() {	

	//select all the a tag with name equal to modal
	$('a[name=modal]').click(function(e) {
		//Cancel the link behavior
		e.preventDefault();
		
		//Get the A tag
		var id = $(this).attr('href');
	
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
		$(id).css('top',  winH/2-$(id).height()/2);
		$(id).css('left', winW/2-$(id).width()/2);
	
		//transition effect
		$(id).fadeIn(2000); 
	
	});
	
	//if close button is clicked
	$('.window .close').click(function (e) {
		//Cancel the link behavior
		e.preventDefault();
		
		$('#mask').hide();
		$('.window').hide();
	});		
	
	//if mask is clicked
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

</script>
<style>
#mask {
  position:fixed;
  left:0;
  top:0;
  z-index:9000;
  display:none;
}
  
#boxes .window {
  position:fixed;
  left:0;
  top:0;
  width:900px;
  height:10000px;
  display:none;
  z-index:9999;
  padding:20px;
}


</style>



    </head>
    <body bgcolor="#cddedd" >
        

        <div style="position: absolute; top: -67px;z-index: 100; left: 50%; width: 1100px; margin-left: -600px; height: 30px"> 
            <img style="z-index: 100; position: relative; top: 160px; left: 310px" src="imagens/estante.png" width="600" height="738" alt="estante"/>

                <a href="#dialog" name="modal">
                    <img style="z-index: 100; position: relative; top: -450px; left: -263px" src="imagens/livro1.png" width="80" height="116" alt="livro1"/>
                 </a>
        </div>
       
                   
                <div id="boxes">

           <div id="dialog" class="window" >

			
			<div class="exemples">
                            

                            <div><img src="livro jquery imagens/livro1/0.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/1.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/2.png"width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/3.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/4.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/5.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/6.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/7.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/8.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/9.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/10.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/11.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/12.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/13.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/14.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/15.png" width="400" height="533" /></div>

                            <div><img src="livro jquery imagens/livro1/16.png" width="400" height="533" /></div>
				
                            <div><img src="livro jquery imagens/livro1/17.png" width="400" height="533" /></div>
			</div>
			<div><a href="#"  onclick="$('.exemples:eq(0)').trigger('previous'); return false;"><<<</a> - <a href="#" onclick="javascript:$('.exemples:eq(0)').trigger('next'); return false;">>>></a></div>
		
               
               	<a href="#"class="close"/>Close it</a>
           
           
</div>
                    
       
<!-- Mask to cover the whole screen -->
  <div id="mask"></div>

        <?php
        include_once './main.php';
        include './menu.php';
        include_once 'amigos_chat.php';
        ?> 
      
           
   </div>     
    </body>
</html>
