<?php
    
    class Trajeto{   
        private $idTrajeto;
        private $QuilometragemInicial;
        private $QuilometragemFinal;
        private $HorarioInicio;
        private $HorarioFinal;
        private $idViagem;
        private $idVeiculo;
        private $idMotorista;

        function __construct($_idTrajeto, $_QuilometragemInicial, $_QuilometragemFinal, $_HorarioInicio, $_HorarioFinal, $_idViagem, $_idVeiculo, $_idMotorista){
            $this->idTrajeto = $_idTrajeto;
            $this->QuilometragemInicial = $_QuilometragemInicial;
            $this->QuilometragemFinal = $_QuilometragemFinal;
            $this->HorarioInicio = $_HorarioInicio;
            $this->HorarioFinal = $_HorarioFinal;
            $this->idViagem = $_idViagem;
            $this->idVeiculo = $_idVeiculo;
            $this->idMotorista = $_idMotorista;            
        }

        public function GetidTrajeto():int{
            return $this->idTrajeto;
        }
        public function GetQuilometragemInicial():int{
            return $this->QuilometragemInicial;
        }
        public function SetQuilometragemInicial($_QuilometragemInicial):void{
            $this->QuilometragemInicial = $_QuilometragemInicial;
        }  
        public function GetQuilometragemFinal():int{
            return $this->QuilometragemFinal;
        }
        public function SetQuilometragemFinal($_QuilometragemFinal):void{
            $this->QuilometragemFinal = $_QuilometragemFinal;
        }
        public function GetHorarioInicio():string{
            return $this->HorarioInicio;
        }
        public function SetHorarioInicio($_HorarioInicio):void{
            $this->HorarioInicio = $_HorarioInicio;
        }
        public function GetHorarioFinal():string{
            return $this->HorarioFim;
        }
        public function SetHorarioFinal($_HorarioFinal):void{
            $this->HorarioFinal = $_HorarioFinal;
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
        public function GetidMotorista():int{
            return $this->idMotorista;
        }
        public function SetidMotorista($_idMotorista):void{
            $this->idMotorista = $_idMotorista;
        }

        public function InsereTrajeto($link){
            $query="INSERT INTO trajeto VALUES(NULL,".$this->QuilometragemInicial.",".$this->QuilometragemFinal.",'".$this->HorarioInicio."','".$this->HorarioFinal."',".$this->idViagem.",".$this->idVeiculo.",".$this->idMotorista.")";
            
            $link->query($query) or  die ($link->error);
            $this->idTrajeto = $link->insert_id;
        }

        public function GetTrajeto ($link){
            $query="SELECT * FROM trajeto WHERE idTrajeto = $this->idTrajeto";
            //$query="SELECT * FROM Pessoa";
            $resultado= $link->query($query) or die ($link->error);
            $linha = $resultado->fetch_array();

            $this->idTrajeto = $linha["idTrajeto"];
            $this->QuilometragemInicial = $linha["QuilometragemInicial"];
            $this->QuilometragemFinal = $linha["QuilometragemFinal"];
            $this->HorarioInicio = $linha["HorarioInicio"];
            $this->HorarioFinal = $linha["HorarioFinal"];
            $this->idViagem = $linha["idViagem"];
            $this->idVeiculo = $linha["idVeiculo"];
            $this->idMotorista = $linha["idMotorista"];
        }

        public function EncerraTrajeto($link){
            $query="UPDATE trajeto SET QuilometragemFinal = $this->QuilometragemFinal, HorarioFinal = '$this->HorarioFinal' WHERE idTrajeto = $this->idTrajeto";
            $link->query($query) or die($link->error);
        } 
    }   
?>