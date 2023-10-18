<?php
    class Usuario{
        private $idUsuario;
        private $Login;
        private $Senha;
        private $Nome;
        private $Acesso;
        private $Telefone;


        public function __construct($_idUsuario, $_Login, $_Senha, $_Nome, $_Acesso, $_Telefone){
            $this->idUsuario = $_idUsuario;
            $this->Login = $_Login;
            $this->Senha = $_Senha;
            $this->Nome  = $_Nome;
            $this->Acesso = $_Acesso;
            $this->Telefone = $_Telefone;

        }

        public function GetidUsuario():int{
            return $this->idUsuario;
        }
        public function Getlogin():string{
            return $this->Login;
        }
        public function SetLogin($_Login):void{
            $this->Login = $_Login;
        }
        public function GetSenha():string{
            return $this->Senha;
        }
        public function SetSenha($_Senha){
            $this->Senha = $_Senha;
        }
        public function GetNome():string{
            return $this->Nome;
        }
        public function SetNome($_Nome){
            $this->Nome = $_Nome;
        }
        public function GetAcesso():int{
            return $this->Acesso;
        }
        public function SetAcesso($Acesso){
            $this->Acesso = $_Acesso;
        }
        public function GetTelefone():string{
            return $this->Telefone;
        }
        public function SetTelefone($_Telefone){
            $this->Telefone = $_Telefone;
        }
        public function Verificar($link){
            $query ="SELECT * FROM Usuario WHERE Login like '".$this->Login."' AND Senha LIKE '".$this->Senha."'";

			$resultado = $link->query($query) or die ($link->error);
            if($resultado->num_rows == 1){
                return TRUE;	
            }else{
                return FALSE;
            }
        }



    }

?>