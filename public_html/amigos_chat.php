<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat Box</title>
<style type="text/css">
<!--
.shout_box {
	background: #169691 ;
	width: 225px;
	overflow: hidden;
	position: fixed;
	bottom: 0;
	right: 75%;
	z-index:9;
        
}
.shout_box .header .close_btn {
	background: url(images/close_btn.png) no-repeat 0px 0px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .close_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -16px;
}

.shout_box .header .open_btn {
	background: url(images/close_btn.png) no-repeat 0px -32px;
	float: right;
	width: 15px;
	height: 15px;
}
.shout_box .header .open_btn:hover {
	background: url(images/close_btn.png) no-repeat 0px -48px;
}
.shout_box .header{
	padding: 5px 3px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: bold;
	color:#fff;
	border: 1px solid rgba(0, 39, 121, .76);
	border-bottom:none;
	cursor: pointer;
}
.shout_box .header:hover{
	background-color: #169691;
}
.shout_box .message_box {
	background: #FFFFFF;
	height: 200px;
	overflow:auto;
	border: 1px solid #CCC;
        
}
.shout_msg{
	margin-bottom: 10px;
	display: block;
	border-bottom: 1px solid #F3F3F3;
	padding: 0px 5px 5px 5px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	color:#7C7C7C;
}
.message_box:last-child {
	border-bottom:none;
}
time{
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
	font-weight: normal;
	float:right;
	color: #D5D5D5;
}
.shout_msg .username{
	margin-bottom: 10px;
	margin-top: 10px;
}
.user_info input {
	width: 98%;
	height: 25px;
	border: 1px solid #CCC;
	border-top: none;
	padding: 3px 0px 0px 3px;
	font: 11px 'lucida grande', tahoma, verdana, arial, sans-serif;
}
.shout_msg .username{
	font-weight: bold;
	display: block;
}
-->
</style>

<script type="text/javascript" src="js/chat/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {

	// carregar mensagens a cada 1000 milissegundos a partir de servidor.
	load_data = {'fetch':1};
	window.setInterval(function(){
	 $.post('shout1.php', load_data,  function(data) {
		$('.message_box').html(data);
		var scrolltoh = $('.message_box')[0].scrollHeight;
		$('.message_box').scrollTop(scrolltoh);
	 });
	}, 1000);
	
        <!-- faz o chat minimizar e maximizar 
	//método para acionar quando bate usuário tecla enter
	//$("#shout_message").keypress(function(evt) {
		//if(evt.which== -15 ) {
				//var iusername = $('#shout_username').val();
				//var imessage = $('#shout_message').val();
				//post_data = {'username':iusername, 'message':imessage};
			 	-->
                                
                                
				//   enviar dados para "shout.php" usando jQuery $.post()
				$.post('shout1.php', post_data, function(data) {
					
					//acrescentar dados em messagebox com jQuery desaparecer efeito!
					$(data).hide().appendTo('.message_box').fadeIn();
	
					//manter rolada para baixo do chat!
					var scrolltoh = $('.message_box')[0].scrollHeight;
					$('.message_box').scrollTop(scrolltoh);
					
					//redefinir o valor da caixa de mensagem
					$('#shout_message').val('');
					
				}).fail(function(err) { 
				
				//alerta de erro do servidor HTTP 
				alert(err.statusText); 
				});
			}
	});
	
	//alternar hide/show shout box
	$(".close_btn").click(function (e) {
		//get CSS display state of .toggle_chat element
		var toggleState = $('.toggle_chat').css('display');
		
		//toggle show/hide chat box
		$('.toggle_chat').slideToggle();
		
		//use toggleState var to change close/open icon image
		if(toggleState == 'block')
		{
			$(".header div").attr('class', 'open_btn');
		}else{
			$(".header div").attr('class', 'close_btn');
		}
		 
		 
	});
});

</script>
</head>



<body>
 
   
<div class="shout_box">
<div class="header">Amigos<div class="close_btn">&nbsp;</div></div>
  <div class="toggle_chat">
  <div class="message_box">
 <?php
  $cont=1;
  
 $result_listachat = mysql_query("SELECT DISTINCT n_user, user.id_user AS id_user, img_leitor  FROM `amizade2` inner join user on amizade2.id_user=user.id_user order by id_amizade2 desc");
            while ($list_amichat = mysql_fetch_array($result_listachat)) {              
?>
      <img src="foto_user/<?php echo $list_amichat['id_user'] . '.' . $list_amichat['img_leitor'] ?>" onerror="this.src='imagens/perfil_usuario.png'" width="30" height="30" alt="<?php echo $list_amichat['id_user']; ?>"/>
      <a href="#" onclick="abreURL('a.php?id_amigo=<?php echo $list_amichat['id_user'] ?>', 'GET', 'ch') ">
          <?php echo $list_amichat['n_user']?>
      </a>
      <br>
<?php

$cont++;
}

?>

    </div>
    <div class="user_info">
    </div>
    </div>
</div>
        
</body>
</html>
