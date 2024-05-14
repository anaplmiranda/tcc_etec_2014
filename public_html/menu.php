<table style=" position: fixed; top: 130px; left: 1002px; z-index: 100px " border="0">
    <tr  >
        <td>
            <img src="foto_user/<?php echo $id_user; ?>.jpg" onerror="this.src='imagens/perfil_usuario.png'" width="50" height="50" alt="<?php echo $list['id_user']; ?>"/>
        </td>
        <td style="width: 400px; padding: 7px;" >

            <br>
            <a href="leitor.php?id_user=<?php echo $id_user; ?>"><?php echo $u_user; ?></a>
            <br>
            <a style="font-weight: bold; color: black" href="edit_dados_pessoais.php">Editar perfil</a>
            <br>
        </td>
    </tr>
</table>




<div style="position: fixed; top: 200px; left: 1002px">



    <a href="livro_marcar.php?situcao=Lido">
        <img  src="imagens/lido.png" width="139" height="31" alt="lido"/>
    </a>
    <br>
    <a href="livro_marcar.php?situcao=Lendo">
        <img src="imagens/lendo.png" width="139" height="31" alt="lendo"/>
    </a>
    <br>
    <a href="livro_marcar.php?situcao=Vai_ler">
        <img  src="imagens/vailer.png" width="139" height="31" alt="vailer"/>
    </a>
    <br>
    <a href="livro_marcar.php?situcao=Relendo">
        <img  src="imagens/relendo.png" width="139" height="31" alt="relendo"/>
    </a>
    <br>
    <a href="livro_marcar.php?situcao=abandonou">
        <img   src="imagens/abandonou.png" width="139" height="31" alt="abandonou"/>
    </a>
    <br>
    <a href="biblioteca_online.php">
        <img src="imagens/biblioteca.png" width="160" height="31" alt="biblioteca"/>
    </a>
</div>