<?php
    class ViagemVeiculo{
        private $idViagem;
        private $idVeiculo;

        function __construct($_idViagem, $_idVeiculo){
            $this->idViagem = $_idViagem;
            $this->idVeiculo = $_idVeiculo;
        }
        
        public function GetidViagem():int{
            return $this->idViagem;
        }
        public function SetidViagem($_idViagem):void{
            $this->idViagem = $_idViagem;
        }
        public function GetidVeiculo():int{
            return $this->idVeiculo;
        }
        public function SetidVeiculo($_idVeiculo):void{
            $this->idVeiculo = $_idVeiculo;
        }
        public function InsereViagemVeiculo($link){
            $query="INSERT INTO ViagemVeiculo VALUES(".$this->idViagem.",".$this->idVeiculo.")";
            $link->query($query) or die ($link->error);
        }
    }
?>