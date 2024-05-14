<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="js/banner/jquery-1.9.1.min.js" type="text/javascript"></script>
        <script src="js/banner/jquery.cycle.all.js" type="text/javascript"></script>
        <script src="js/banner/jquery.easing.1.3.js" type="text/javascript"></script>

        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/book.css" />
        <script src="js/modernizr.custom.js"></script>

        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />

    </head>

    <style>
        .bordaBox {bbackground: ttransparent; width:0%;}
        .bordaBox .b1, .bordaBox .b2, .bordaBox .b3, .bordaBox .b4, .bordaBox .b1b, .bordaBox .b2b, .bordaBox .b3b, .bordaBox .b4b {display:block; overflow:hidden; font-size:1px;}
        .bordaBox .b1, .bordaBox .b2, .bordaBox .b3, .bordaBox .b1b, .bordaBox .b2b, .bordaBox .b3b {height:0px;}
        .bordaBox .b2, .bordaBox .b3, .bordaBox .b4 {background:#f2ffff; border-left:1px solid #999; border-right:1px solid #999;}
        .bordaBox .b1 {margin:0 5px; background:#999;}
        .bordaBox .b2 {margin:0 3px; border-width:0 0px;}
        .bordaBox .b3 {margin:0 2px;}
        .bordaBox .b4 {height:2px; margin:0 1px;}
        .bordaBox .conteudo {padding:7px;display:block; background:#f2ffff; border-left:1px solid #999; border-right:1px solid #999;}
    </style>
  

    <body bgcolor="#cddedd" >

        <?php
        include_once './main_index.php';
        ?>        
    <center> 

        <script type="text/javascript">
            $(document).ready(function() {
                $('#banner').cycle({
                    fx: "fade",
                    next: '#next',
                    prev: '#prev',
                    speed: 1000,
                    easing: "easeInQuad",
                    timeout: 1000
                });

            });
        </script>      

        <!--- jquery banner -->

        <div style="top: 35px" id="banner">
            <img src="imagens/imagen1.jpg" width="910" height="300" alt="imagen4"/>
            <img src="imagens/imagen2.jpg" width="910" height="300" alt="imagen6"/>
            <img src="imagens/imagen3.jpg" width="910" height="300" alt="imagen1"/>
        </div>
    </center>



    <!--  Lançamentos -->
    <br><br><br><br><br><br><br><br><br><br><br>
    <a style="position:relative; font-family: Arial; color: #5F9F9F; font-size: 20px; top: -150px; left: 100px" >
        <b>LANÇAMENTOS</b>
    </a>
    <img style="position: relative; top: -150px; left: 460px" src="imagens/vermais.png" width="83" height="20" alt="vermais"/>


    <br><br>

    <!--  Livros em destaque -->

    <span style="position:relative; font-family: Arial; color: #5F9F9F; font-size: 20px; top: 90px; left: 100px" >
        <b>LIVROS EM DESTAQUE</b>
    </span>


    <!--- LANÇAMENTOS -->

    <a style="position: relative; padding:7px; top: -190px; left: 100px ">

        <table>
            <tr>
                <td>



                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=50">
                        <img src="imagens/6.jpg" width="149" height="220" alt="6"/>
                    </a>

                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=51">
                        <img src="imagens/2.jpg" width="149" height="220" alt="2"/>
                    </a>

                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=49">
                        <img src="imagens/1.jpg" width="149" height="220" alt="1"/>
                    </a>


                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=54">
                        <img src="imagens/4.jpg" width="149" height="220" alt="4"/>
                    </a>

                </td>                         

            </tr>
        </table>

    </a>

    <!--- LIVROS EM DESTAQUE -->

    <div style="position: relative; padding:7px; top: -160px; left: 90px  ">

        <table>
            <tr>
                <td>
                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=50">
                        <img src="imagens/7.jpg" width="149" height="220" alt="6"/>
                    </a>

                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=51">
                        <img src="imagens/8.png" width="149" height="220" alt="2"/>
                    </a>

                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=49">
                        <img src="imagens/9.png" width="149" height="220" alt="1"/>
                    </a>


                    <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=54">
                        <img src="imagens/10.png" width="149" height="220" alt="4"/>
                    </a>

                </td>                         

            </tr>
        </table>
    </div>

</td>                         

</tr>
</table>



<!--- TOP MAIS -->

<div style="position: relative; padding:7px; top: -120px; left: 90px ">

    <table>
        <tr>
            <td>
                <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=50">
                    <img src="imagens/m1.jpg" width="149" height="220" alt="6"/>
                </a>

                <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=51">
                    <img src="imagens/m2.jpg" width="149" height="220" alt="2"/>
                </a>

                <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=49">
                    <img src="imagens/m3.jpg" width="149" height="220" alt="1"/>
                </a>


                <a href="http://www.centerbook.net.br/pg_livro.php?id_livro=54">
                    <img src="imagens/m4.jpg" width="149" height="220" alt="4"/>
                </a>

            </td>                         

        </tr>
    </table>
</div>

</td>                         

</tr>
</table>




<span style="position:relative; font-family: Arial; color: #5F9F9F; font-size: 20px; left: 100px; top: -650px" >
    <b>LIVROS MAIS LIDOS</b>
</span>


<!--- LINK BOX, PARA OS USUARIOS CURTIREM A NOSSA PAGIA NO FACEBOOK -->
<a style="position: relative; left: 515px; top: -340px" >
    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fcenterbook&amp;width=250px&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=589322487791255" 
            scrolling="no" frameborder="0" 
            style="border:none; overflow:hidden; width:300px; height:290px" 
            >
    </iframe>
</a>

<!--- RANKING LEITORES -->
<span style="position:relative; font-family: Arial; color: #5F9F9F; font-size: 20px; left: 215px; top: -929px;" >
    <b>RANKING LEITORES</b>
</span>


<div style="position: relative; width:300px; left: 715px; top: -929px;" class="bordaBox">
    <b class="b1"></b><b class="b2"></b><b class="b3"></b><b class="b4"></b>
    <div class="conteudo">
    </div>
    <b class="b4"></b><b class="b3"></b><b class="b2"></b><b class="b1"></b>
</div>


<!--- RODAPÉ-->

<div style="position: absolute; width: 1100px; margin-left: -550px; top: 1500px; left: 50% ">
    <hr>
    <center>
        <a href="Url do link/"><font color="#335251">Contato | </font></a>
        <a href="Url do link/"><font color="#335251">Sobre nós | </font></a>
        <a href="Url do link/"><font color="#335251">Afiliados  </font></a>
        <br><br>        
        <a href="https://www.facebook.com/centerbook">
            <img src="imagens/facebook.png" width="32" height="32" alt="facebook"/>
        </a>    
        <img src="imagens/instagram.png" width="32" height="32" alt="intagram"/>
        <img src="imagens/blogger.png" width="32" height="32" alt="blogger"/>
        <img src="imagens/twitter.png" width="32" height="32" alt="twitter"/>
        <br><br>
        Center Book © 2014
    </center>
</div>


<br><br><br>

<!-- ESSA DIV DEVE PERMANECER NO FIM DA PAGINA -->
</div>

</body>
</html>
