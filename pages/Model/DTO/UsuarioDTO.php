<?php
    class UsuarioDTO{
 
        private $id_usuarios;
        private $nome_usu;
        private $email_usu;
        private $senha_usu;
        private $perfil_usu;
        private $situacao_usu;
       

        public function getId_usuarios(){
            return $this->id_usuarios;
        }
        public function getNome_usu(){
            return $this->nome_usu;
        }
        public function getEmail_usu(){
            return $this->email_usu;
        }
        public function getSenha_usu(){
            return $this->senha_usu;
        }
        public function getPerfil_usu(){
            return $this->perfil_usu;
        }
        public function getSituacao_usu(){
            return $this->situacao_usu;
        }  
       
        public function setSenha_usu($senha_usu){
            $this->senha_usu=$senha_usu;
        }
        public function setId_usuarios($id_usuarios){
            $this->id_usuarios=$id_usuarios;
        }
        public function setNome_usu($nome_usu){
            $this->nome_usu= ucwords(trim($nome_usu));
        }
        public function setEmail_usu($email_usu){
            $this->email_usu=strtolower(trim($email_usu));
        }
        public function setPerfil_usu($perfil_usu){
            $this->perfil_usu=$perfil_usu;
        }
        public function setSituacao_usu($situacao_usu){
            $this->situacao_usu=$situacao_usu;
        }
    }

