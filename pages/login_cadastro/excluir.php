<?php
    require_once "Model/DAO/UsuarioDAO.php";
    $idUsuario =  $_GET["id_usuarios"];
    $usuarioDAO = new UsuarioDAO();
    $usuarioDAO->excluirUsuarioById($idUsuario);

    header("location:listar_usuarios.php");

?>