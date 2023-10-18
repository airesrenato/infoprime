<?php

    class MotoristaViagem{
        private $Motorista_idMotorista;
        private $Viagem_idViagem;

        function __construct($_Motorista_idMotorista, $_Viagem_idViagem) {
            $this->Motorista_idMotorista = $_Motorista_idMotorista;
            $this->Viagem_idViagem = $_Viagem_idViagem;
        }

        public function GetidMotorista():int{
            return $this->Motorista_idMotorista;
        }
        public function SetidMotorista($_Motorista_idMotorista):void{
            $this->Motorista_idMotorista = $_Motorista_idMotorista;
        }
        public function GetidViagem():int{
            return $this->Viagem_idViagem;
        }
        public function SetidViagem($_Viagem_idViagem):void{
            $this->Viagem_idViagem = $_Viagem_idViagem;
        }

        public function InsereMotoristaViagem($link){
            $query="INSERT INTO Motorista_has_Viagem VALUES(".$this->Motorista_idMotorista.",".$this->Viagem_idViagem.")";
            $link->query($query) or die ($link->error);
        }
    }
?>