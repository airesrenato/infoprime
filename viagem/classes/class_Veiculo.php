<?php
    class Veiculo{
        private $idVeiculo;
        private $Marca;
        private $Modelo;
        private $Placa;


        function __construct($_idVeiculo,$_Marca,$_Modelo,$_Placa){
            $this->idVeiculo = $_idVeiculo;
            $this->Marca = $_Marca;
            $this->Modelo = $_Modelo;
            $this->Placa = $_Placa;
        }

        public function GetidVeiculo():int{
            return $this->idVeiculo;
        }
        public function GetMarca():string{
            return $this->Marca;
        }
        public function SetMarca($_Marca):void{
            $this->Marca = $_Marca;
        }
        public function GetModelo():string{
            return $this->Modelo;
        }
        public function SetModelo($_Modelo){
            $this->Modelo = $_Modelo;
        }
        public function GetPlaca():string{
            return $this->Placa;
        }
        public function SetPlaca($_Placa):void{
            $this->Placa = $_Placa;
        }

        public function InsereVeiculo($link){
            $query="INSERT INTO Veiculo VALUES(NULL,'".$this->Marca."','".$this->Modelo."','".$this->Placa."')";
            $link->query($query) or  die ($link->error);
            $this->idVeiculo= $link->insert_id;

        }
    }
?>