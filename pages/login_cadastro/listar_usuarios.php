<?php
    $raiz = $_SERVER['DOCUMENT_ROOT']."/Decolivre";
    require_once $raiz."/pages/Model/DAO/UsuarioDAO.php";
    $usuarioDAO = new UsuarioDAO();
    $usuarios = $usuarioDAO->listarTodos();
    
?>


<div align='center'><h3><a href="cadastrar.php"><input type="button" value="..::ADICIONAR USUARIO::.."></a><h3></div>
<br>
<meta charset="utf-8">
<table border="1" width='100%'>
    <tr>
       <th>ID</th>
       <th>NOME</th>
       <th>EMAIL</th>
       <th>SENHA</th>
       <th>AÇÕES</th>
    </tr>
   <?php foreach($usuarios as $usu): ?>
    <tr>
        <td><?php echo $usu['id_usuarios'];?></td>
        <td><?php echo $usu['nome_usu'];?></td>
        <td><?php echo $usu['email_usu'];?></td>
        <td><?php echo $usu['senha_usu'];?></td>
        <td>
            <a href="#" title="ALTERAR"> 
            <i class="fa fa-edit fa-lg"></i></a>
            <a href="excluirUsuarioControl.php?id=<?=$usu["id_usuarios"] ?>" title="EXCLUIR">
            <i class="fa fa-trash fa-lg"></i></a>
        </td>
    </tr>
<?php endforeach; ?>
</table>

