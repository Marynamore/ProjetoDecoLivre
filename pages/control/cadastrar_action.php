<?php
$raiz = $_SERVER['DOCUMENT_ROOT']."/Decolivre";
require_once $raiz.'/pages/Model/DTO/UsuarioDTO.php';
require_once $raiz. '/pages/Model/DAO/UsuarioDAO.php';

$nome_usu = $_POST["nome_usu"];
$email_usu = $_POST["email_usu"];
$senha_usu = $_POST["senha_usu"];


$usuarioDTO = new UsuarioDTO();
$usuarioDTO->setNome_usu($nome_usu);
$usuarioDTO->setEmail_usu($email_usu);
$usuarioDTO->setSenha_usu($senha_usu);

$usuarioDAO = new UsuarioDAO();
$usuarioDAO->cadastrarUsuario($usuarioDTO);

if(isset($usuarioDAO)){
   header("Location:../../index.php");
   exit;
}else{
   header("Location:../login_cadastro/cadastro.php");
   exit;
}

