<?php

    class OrdemServico {
        private $idOrdemServico;
        private $Nome;
        private $Empresa;
        private $Descricao;
        private $idUsuario;
        private $idVeiculo;

        public function __construct($_idOrdemServico,$_Nome,$_Empresa,$_Descricao,$_idUsuario,$_idVeiculo){
            $this->idOrdemServico = $_idOrdemServico;
            $this->Nome = $_Nome;
            $this->Empresa = $_Empresa;
            $this->Descricao = $_Descricao;
            $this->idUsuario = $_idUsuario;
            $this->idVeiculo = $_idVeiculo;
        }

        public function GetidOrdemServico():int{
            return $this->idOrdemServico;
        }
      
        public function GetNome():string{
            return $this->Nome;
        }

        public function SetNome($_Nome):void{
            $this->Nome = $_Nome;
        }
        public function GetEmpresa():string{
            return $this->Empresa;
        }
        public function SetEmpresa($_Empresa):void{
            $this->Empresa = $_Empresa;
        }
        public function GetDescricao():string{
            return $this->Descricao;
        }
        public function SetDescricao($_Descricao):void{
            $this->Descricao = $_Descricao;
        }
        public function GetidUsuario():int{
            return $this->idUsuario;
        }
        public function SetidUsuario($_idUsuario):void{
            $this->idUsuario = $_idUsuario;
        }
        public function GetidVeiculo():int{
            return $this->idVeiculo;
        }
        public function SetidVeiculo($_idVeiculo):void{
            $this->idVeiculo = $_idVeiculo;
        }
    }

?>