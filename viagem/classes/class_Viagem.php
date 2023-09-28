<?php
    class Viagem{
        private $idViagem;
        private $Origem;
        private $Destino;
        private $DiaSaida;
        private $DiaChegada;
        private $Status;


        function __construct($_idViagem,$_Origem,$_Destino,$_DiaSaida,$_DiaChegada,$_Status){
            $this->idViagem = $_idViagem;
            $this->Origem = $_Origem;
            $this->Destino = $_Destino;
            $this->DiaSaida = $_DiaSaida;
            $this->DiaChegada = $_DiaChegada;
            $this->Status = $_Status;
        }

        public function GetidViagem():int{
            return $this->idViagem;
        }
        public function GetOrigem():string{
            return $this->Origem;
        }
        public function SetOrigem($_Origem):void{
            $this->Origem = $_Origem;
        }
        public function GetDestino():string{
            return $this->Destino;
        }
        public function SetDestino($_Destino):void{
            $this->Destino = $_Destino;
        }
        public function GetDiaSaida():string{
            return $this->DiaSaida;
        }
        public function SetDiaSaida($_DiaSaida):void{
            $this->DiaSaida = $_DiaSaida;
        }
        public function GetDiaChegada():string{
            return $this->DiaChegada;
        }
        public function SetDiaChegada($_DiaChegada):void{
            $this->DiaChegada = $_DiaChegada;
        }
        public function GetStatus():string{
            return $this->Status;
        }
        public function SetStatus($_Status):void{
            $this->Status = $_Status;
        }
        public function InsereViagem($link){
            $query="INSERT INTO Viagem VALUES(NULL,'".$this->Origem."','".$this->Destino."','".$this->DiaSaida."','".$this->DiaChegada."','".$this->Status."')";
            $link->query($query) or  die ($link->error);
            $this->idViagem = $link->insert_id;
        }

    }

?>