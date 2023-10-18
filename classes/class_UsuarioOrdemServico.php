<?php

    class UsuarioOrdemServico{
        private $Usuario_idUsuario;
        private $OrdemServico_idordemServico;

        function __construct($_Usuario_idUsuario, $_OrdemServico_idordemServico) {
            $this->Usuario_idUsuario = $_Usuario_idUsuario;
            $this->OrdemServico_idordemServico = $_OrdemServico_idordemServico;
        }

        public function GetidUsuario():int{
            return $this->Usuario_idUsuario;
        }
        public function SetidUsuario($_Usuario_idUsuario):void{
            $this->Usuario_idUsuario = $_Usuario_idUsuario;
        }
        public function GetidOrdemServico():int{
            return $this->OrdemServico_idordemServico;
        }
        public function SetidOrdemServico($_OrdemServico_idordemServico):void{
            $this->OrdemServico_idordemServico = $_OrdemServico_idordemServico;
        }

        public function InsereUsuarioOrdemServico($link){
            $query="INSERT INTO Usuario_has_ordemServico VALUES(".$this->Usuario_idUsuario.",".$this->OrdemServico_idordemServico.")";
            $link->query($query) or die ($link->error);
        }
    }
?>