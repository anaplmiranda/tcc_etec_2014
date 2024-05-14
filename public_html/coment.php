<table style="width: 100%">
        
<?php
include_once './conect.php';
    $id_postar=$_REQUEST['id_postar'];
    $result_com=  mysql_query("SELECT *  FROM `comentario` INNER JOIN user ON user.id_user = comentario.id_user WHERE `id_postar` ='$id_postar' ORDER BY id_comentario ASC");
    while($list_com=  mysql_fetch_array($result_com)){
        
?>
    <tr class="banner6">
        <td style="width: 120px">
            <img src="foto_user/<?php echo $list_com['id_user'] ?>.<?php echo $list_com['img_leitor'] ?>" width="30" height="30" alt="<?php echo $list_com['id_user'] ?>.<?php echo $list_com['img_leitor'] ?>"/>
            <BR />
            <?php echo $list_com['n_user'] ?>
        </td>
        <td>
            <?php echo $list_com['comentario']; ?>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="height: 2px">
        </td>
    </tr>
<?php        
    }
?>
</table>           
