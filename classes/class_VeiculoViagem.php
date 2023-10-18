<?php

    class VeiculoViagem{
        private $Veiculo_idVeiculo;
        private $Viagem_idViagem;

        function __construct($_Veiculo_idVeiculo, $_Viagem_idViagem) {
            $this->Veiculo_idVeiculo = $_Veiculo_idVeiculo;
            $this->Viagem_idViagem = $_Viagem_idViagem;
        }

        public function GetidVeiculo():int{
            return $this->Veiculo_idVeiculo;
        }
        public function SetidVeiculo($_Veiculo_idVeiculo):void{
            $this->Veiculo_idVeiculo = $_Veiculo_idVeiculo;
        }
        public function GetidViagem():int{
            return $this->Viagem_idViagem;
        }
        public function SetidViagem($_Viagem_idViagem):void{
            $this->Viagem_idViagem = $_Viagem_idViagem;
        }

        public function InsereVeiculoViagem($link){
            $query="INSERT INTO Veiculo_has_Viagem VALUES(".$this->Veiculo_idVeiculo.",".$this->Viagem_idViagem.")";
            $link->query($query) or die ($link->error);
        }
    }
?>