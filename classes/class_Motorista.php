<?php
    class Motorista{
        private $idMotorista;
        private $Nome;
        private $idUsuario;

        function __construct($_idMotorista, $_Nome, $_idUsuario){
            $this->idMotorista = $_idMotorista;
            $this->Nome = $_Nome;
            $this->idUsuario = $_idUsuario;
        }

        public function GetidMotorista():int{
            return $this->idMotorista;
        }
        public function GetNome():string{
            return $this->Nome;
        }
        public function SetNome($_Nome):void{
            $this->Nome = $_Nome;
        }
        public function GetidUsuario():int{
            return $this->idUsuario;
        }
        public function SetidUsuario():void{
            $this->idUsuario = $_idUsuario;
        }
        
        public function InsereMotorista($link){
            $query="INSERT INTO motorista VALUES(NULL,'".$this->Nome."',".$this->idUsuario.")";
            
            $link->query($query) or die ($link->error);
            $this->idMotorista= $link->insert_id;
        }
    }     
?>