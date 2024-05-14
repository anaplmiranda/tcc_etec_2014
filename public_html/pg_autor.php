
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;">
        <link href="script/main.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main1.css" media="all" rel="stylesheet" type="text/css" />
        <link href="script/main2.css" media="all" rel="stylesheet" type="text/css" />
        <title></title>

    </head>
    <body bgcolor="#cddedd" >
        <?php
        include_once './main.php';
         include_once 'menu.php';
        $id=$_REQUEST['id'];
        
         $result=  mysql_query("SELECT *  FROM `autor` WHERE id=$id");
       $list=  mysql_fetch_array($result);
       
      
       
       
       
       ?>
        <div align="left" >
            <br>
            <br>
             <br>
            <br>
     
            
            <div style="position: relative; top: -15px; left: 400px" >
         <?php
          echo $list['n_autor'];
         ?>
                
                </div>
         <table style=" position: relative; top:20px; left: 150px " border="0">
            <tr class="banner1" style="text-align: justify;" >
                <td>
             <img align="left" src="autor/<?php echo $list['id'].'.'.$list['img_autor'] ?>"  lefgt=""width="250" height="400" alt=""/>     


                </td>
                <td style="width: 400px; padding: 7px" >

                      <?php
           echo $list['biografia'];
        ?>
                </td>
            </tr>
        </table>

         
             
     </div>
         
    </body>
</html>
