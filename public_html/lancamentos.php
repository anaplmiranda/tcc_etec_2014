<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--
Sproing! - Make An Elastic Thumbnail Menu
By Sam Dunn
2009 Build Internet!
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Sproing! - Make An Elastic Thumbnail Menu | Build Internet!</title>	
	
	<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menuitem img').animate({width: 100}, 0);
			$('.menuitem').mouseover(function(){
					gridimage = $(this).find('img');
					gridimage.stop().animate({width: 200}, 150);
				}).mouseout(function(){
					gridimage.stop().animate({width: 100}, 150);
			});
		}); 
	</script>
	
	<style type="text/css">
		*{ padding:0px; margin:0px; }
		img{ border: none; -ms-interpolation-mode: bicubic; }
		body{ padding:10px; text-align:center; background:#fafafa; }
		
		#wrapper{ position:absolute; left:20%; padding-top:100px; width:650px;}
		
		#menuwrapper{ position:relative; height:210px;}
			#menu{position:absolute; bottom:0; left:0;}
				.menuitem{ position:fixed relative; bottom:0px; display:inline-block; }
				
		
	</style>
	
</head>

<body>
	<div id="wrapper">
		<img src="elasticthumb.jpg"/>
		<div id="menuwrapper">
			<div id="menu">
				<a href="http://buildinternet.com/2009/08/a-bundle-of-free-icons/" class="menuitem"><img src="icons.jpg"></a>
				<a href="http://buildinternet.com/2009/07/a-collection-of-some-pretty-neat-text-artwork/" class="menuitem"><img src="neattext.jpg"></a>
				<a href="http://officeal.com" class="menuitem"><img src="officeal.jpg"></a>
				<a href="http://buildinternet.com/2009/07/animate-curtains-opening-with-jquery/" class="menuitem"><img src="curtain.jpg"></a>
				<a href="http://buildinternet.com/2009/07/the-rebranding-of-a-company-a-case-study/" class="menuitem"><img src="rebrand.jpg"></a>
			</div>
		</div>
	
	</div>
	
</body>
</html><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<!--
Sproing! - Make An Elastic Thumbnail Menu
By Sam Dunn
2009 Build Internet!
-->

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

	<title>Sproing! - Make An Elastic Thumbnail Menu | Build Internet!</title>	
	
	<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.menuitem img').animate({width: 100}, 0);
			$('.menuitem').mouseover(function(){
					gridimage = $(this).find('img');
					gridimage.stop().animate({width: 200}, 150);
				}).mouseout(function(){
					gridimage.stop().animate({width: 100}, 150);
			});
		}); 
	</script>
	
	<style type="text/css">
		*{ padding:0px; margin:0px; }
		img{ border: none; -ms-interpolation-mode: bicubic; }
		body{ padding:10px; text-align:center; background:#fafafa; }
		
		#wrapper{ position:absolute; left:20%; padding-top:100px; width:650px;}
		
		#menuwrapper{ position:relative; height:210px;}
			#menu{position:absolute; bottom:0; left:0;}
				.menuitem{ position:fixed relative; bottom:0px; display:inline-block; }
				
		
	</style>
	
</head>

<body>
	<div id="wrapper">
		<img src="elasticthumb.jpg"/>
		<div id="menuwrapper">
			<div id="menu">
				<a href="http://buildinternet.com/2009/08/a-bundle-of-free-icons/" class="menuitem"><img src="icons.jpg"></a>
				<a href="http://buildinternet.com/2009/07/a-collection-of-some-pretty-neat-text-artwork/" class="menuitem"><img src="neattext.jpg"></a>
				<a href="http://officeal.com" class="menuitem"><img src="officeal.jpg"></a>
				<a href="http://buildinternet.com/2009/07/animate-curtains-opening-with-jquery/" class="menuitem"><img src="curtain.jpg"></a>
				<a href="http://buildinternet.com/2009/07/the-rebranding-of-a-company-a-case-study/" class="menuitem"><img src="rebrand.jpg"></a>
			</div>
		</div>
	
	</div>
	
</body>
</html>