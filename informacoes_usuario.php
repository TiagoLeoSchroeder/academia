<html>
<table>
    <thead>
        <tr>
        <th>CÓDIGO</th>
        <th>NOME</th>
        <th>E-MAIL</th>
        <th>ADM</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            include('listar_usuarios.php')

            if(!empty($lista_usuarios)) {
                foreach($lista_usuarios as $linha) { ?>
            <?php }} ?>
            <tr>
                <td><?php echo '<img height="40px" width="40px" scr="' .$linha["imagem_usuario"].'"'; ?></td>
                <td><?php echo $linha['pk_usuario']?></td>
                <td><?php echo $linha['nome_usuario']?></td>
                <td><?php echo $linha['email_usuario']?></td>
                <td><?php echo $linha['is_adm_usuario']?></td>
                <td><a href="excluir_usuario.php?codigo=<?php echo $linha['pk_usuario']?>">
                <button type="submit" value="Excluir"></button>
                </a>
            </td>
            </tr>
    </tbody>
</table>  
</html>
