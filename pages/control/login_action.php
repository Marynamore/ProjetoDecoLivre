<?php
$raiz = $_SERVER['DOCUMENT_ROOT']."/Decolivre";
require_once $raiz.'/pages/Model/DAO/UsuarioDAO.php';
require_once $raiz.'/pages/Model/DTO/UsuarioDTO.php';

$email = $_POST["email_usu"];
$senha = $_POST["senha_usu"];

$usuarioDTO =  new UsuarioDTO();
$usuarioDTO->setEmail_usu($email);
$usuarioDTO->setSenha_usu($senha);

$usuarioDAO= new UsuarioDAO();
$usuarioLogado = $usuarioDAO->logar($usuarioDTO);

if ($usuarioLogado!=null ) {
    session_start();
    $_SESSION["login"]=$usuarioLogado->getEmail_usu();
    $_SESSION["perfil_usu"]=$usuarioLogado->getPerfil_usu();
    $_SESSION["id_usuarios"]=$usuarioLogado->getId_usuarios();
    
    header("Location:../../index.php");
} else {
   header ( "location:login.php?msg=usuário e/ou senha inválidos" ); 
}

