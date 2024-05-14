         
<?php
include 'conect.php';
ob_start();
@session_start();
//se o usuário existir
if(!empty($_SESSION['ss'])){
//trocando os nome da ssession por mais fácil
$u_user=$_SESSION['ss']['u_user'];
$n_user=$_SESSION['ss']['n_user'];
$id_user=$_SESSION['ss']['id_user'];
}

//incluindo o topo da página
include_once './topo.php';
?>
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