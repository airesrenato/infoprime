<?php
    class Motorista{
        private $idMotorista;
        private $Nome;
        private $CNH;

        function __construct($_idMotorista, $_Nome, $_CNH){
            $this->idMotorista = $_idMotorista;
            $this->Nome = $_Nome;
            $this->CNH = $_CNH;
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
        public function GetCNH():string{
            return $this->CNH;
        }
        public function SetCNH($_CNH):void{
            $this->CNH = $_CNH;
        }
        public function InsereMotorista($link){
            $query="INSERT INTO Motorista VALUES(NULL,'".$this->Nome."','".$this->CNH."')";
            
            $link->query($query) or die ($link->error);

            $this->idVeiculo= $link->insert_id;
        }
    }
        
?>