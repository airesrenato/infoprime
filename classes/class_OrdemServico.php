<?php

    class OrdemServico {
        private $idOrdemServico;
        private $Descricao;
        private $Solicitante;
        private $ContatoSolicitante;
        private $Status;
        private $idUsuario;
        private $idLider;

        function __construct($_idOrdemServico,$_Descricao,$_Solicitante,$_ContatoSolicitante,$_Status,$_idUsuario,$_idLider){
            $this->idOrdemServico = $_idOrdemServico;
            $this->Descricao = $_Descricao;
            $this->Solicitante = $_Solicitante;
            $this->ContatoSolicitante = $_ContatoSolicitante;
            $this->Status = $_Status;
            $this->idUsuario = $_idUsuario;
            $this->idLider = $_idLider;
        }
        
        public function GetidOrdemServico():int{
            return $this->idOrdemServico;
        }
        public function SetidOrdemServico($_idOrdemServico):void{
            $this->idOrdemServico = $_idOrdemServico;
        }
        public function GetDescricao():string{
            return $this->Descricao;
        }
        public function SetDescricao($_Descricao):void{
            $this->Descricao = $_Descricao;
        }
        public function GetSolicitante():string{
            return $this->Solicitante;
        }
        public function SetSolicitante($_Solicitante):void{
            $this->Solicitante = $_Solicitante;
        }
        public function GetContatoSolicitante():string{
            return $this->ContatoSolicitante;
        }
        public function SetContatoSolicitante($_ContatoSolicitante):void{
            $this->ContatoSolicitante = $_ContatoSolicitante;
        }
        public function GetStatus():string{
            return $this->Status;
        }
        public function SetStatus($_Status):void{
            $this->Status = $_Status;
        }
        public function GetidUsuario():int{
            return $this->idUsuario;
        }
        public function SetidUsuario($_idUsuario):void{
            $this->idUsuario = $_idUsuario;
        }
        public function GetidLider():int{
            return $this->idLider;
        }
        public function SetidLider($_idLider):void{
            $this->idLider = $_idLider;
        }
        public function InsereOrdemServico($link){
            $query="INSERT INTO ordemServico VALUES(NULL,'".$this->Descricao."','".$this->Solicitante."','".$this->ContatoSolicitante."','".$this->Status."',".$this->idUsuario.",".$this->idLider.")";
            $link->query($query) or die ($link->error);
            $this->idOrdemServico = $link->insert_id;
        }
        public function DefineLider($link){
            $query="UPDATE OrdemServico SET idLider = $this->idLider WHERE idOrdemServico = $this->idOrdemServico";
            $link->query($query) or die($link->error);
        } 

    }

?>