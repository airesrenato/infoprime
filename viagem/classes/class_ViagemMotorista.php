<?php
    class ViagemMotorista{
        private $Viagem_idViagem;
        private $Motorista_idMotorista;

        function __contruct($_Viagem_idViagem, $_Motorista_idMotorista){
            $this->Viagem_idViagem;
            $this->Motorista_idMotorista;
        }

        public function GetidViagem():int{
            return $this->Viagem_idViagem;
        }
        public function SetidViagem($_Viagem_idViagem):void{
            $this->Viagem_idViagem = $_Viagem_idViagem;
        }
        public function GetidMotorista($_Motorista_idMotorista):int{
            return $this->Motorista_idMotorista;
        }
        public function SetidMotorista($_Motorista_idMotorista):void{
            $this->Motorista_idMotorista = $_Motorista_idMotorista;
        }
        public function InsereViagemMotorista($link){
            $query="INSERT INTO viagemmotorista VALUES(".$this->Viagem_idViagem.",".$this->Motorista_idMotorista.")";
            $link->query($query) or die($link->error);
            

        }
        
    }

?>