<?php
$raiz = $_SERVER['DOCUMENT_ROOT']."/Decolivre";
require_once $raiz.'/pages/Model/config.php';
require_once $raiz.'/pages/Model/DTO/UsuarioDTO.php';


class UsuarioDAO {
    
    public function logar(UsuarioDTO  $usuarioDTO){
        try{
            $con = Conexao::getInstance();
            $sql = "SELECT * from usuarios WHERE email_usu =? AND senha_usu=?";
            $stmt = $con->prepare($sql);   
            $stmt->bindValue(1, $usuarioDTO->getEmail_usu());
            $stmt->bindValue(2, MD5($usuarioDTO->getSenha_usu()));
            $stmt->execute();
            $usuarioFetch = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if($usuarioFetch !=  NULL){
                $usuario = new UsuarioDTO();
                $usuario->setId_usuarios($usuarioFetch["id_usuarios"]);
                $usuario->setPerfil_usu($usuarioFetch["perfil_usu"]);
                $usuario->setNome_usu($usuarioFetch["nome_usu"]);
                
                return $usuario;
            }
            return null;
            
        }catch(PDOException $e){
            echo $e->getMessage();
            //die() = usado para parar a execução - retirar na versão de produção
            die();
        }    
    }

    public function cadastrarUsuario(UsuarioDTO $usuarioDTO){
        try{
            $con = Conexao::getInstance();
            $sql = "INSERT INTO usuarios (nome_usu,email_usu, senha_usu) ";
            $sql .=" VALUES(?, ?, ?)";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $usuarioDTO->getNome_usu());
            $stmt->bindValue(2, $usuarioDTO->getEmail_usu());
            $stmt->bindValue(3, MD5($usuarioDTO->getSenha_usu()));
   
            return $stmt->execute();
            

        }catch(PDOException $e){
            echo $e->getMessage();
            die();
        }
    }
    
    public function listarTodos(){
        try{
            $con = Conexao::getInstance();
            $sql = "SELECT * from usuarios ORDER BY nome_usu";
            $stmt = $con->prepare($sql);
            $stmt->execute();
            $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $usuarios;
        }catch(PDOException $e){
            echo $e->getMessage();
        }
        
    }

    public function excluirUsuarioById($id_usuarios){
        try{
            $con = Conexao::getInstance();
            $sql = "DELETE  from usuarios WHERE id_usuarios=?";
            $stmt = $con->prepare($sql);
            $stmt->bindValue(1, $id_usuarios);
            
           
            return $stmt->execute();
        }catch(PDOException $e){
            echo $e->getMessage();
        }


    }
}
