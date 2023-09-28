<?php
    
    class Trajeto{   
        private $idTrajeto;
        private $QuilometragemInicial;
        private $QuilometragemFinal;
        private $LI;
        private $LF;
        private $HorarioInicio;
        private $HorarioFim;
        private $idMotorista;
        private $idVeiculo;
        private $idViagem;


        function __construct($_idTrajeto, $_QuilometragemInicial, $_QuilometragemFinal, $_LI, $_LF, $_HorarioInicio, $_HorarioFim, $_idMotorista, $_idVeiculo, $_idViagem){
            $this->idTrajeto = $_idTrajeto;
            $this->QuilometragemInicial = $_QuilometragemInicial;
            $this->QuilometragemFinal = $_QuilometragemFinal;
            $this->LI = $_LI;
            $this->LF = $_LF;
            $this->HorarioInicio = $_HorarioInicio;
            $this->HorarioFim = $_HorarioFim;
            $this->idMotorista = $_idMotorista;
            $this->idVeiculo = $_idVeiculo;
            $this->idViagem = $_idViagem;
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
        public function GetLI():string{
            return $this->LI;
        }
        public function SetLI($_LI):void{
            $this->LI = $_LI;
        }
        public function GetLF():string{
            return $this->LF;
        }
        public function SetLF($_LF):void{
            $this->LF = $_LF;
        }
        public function GetHorarioInicio():string{
            return $this->HorarioInicio;
        }
        public function SetHorarioInicio($_HorarioInicio):void{
            $this->HorarioInicio = $_HorarioInicio;
        }
        public function GetHorarioFim():string{
            return $this->HorarioFim;
        }
        public function SetHorarioFim($_HorarioFim):void{
            $this->HorarioFim = $_HorarioFim;
        }
        public function GetidMotorista():int{
            return $this->idMotorista;
        }
        public function SetidMotorista($_idMotorista):void{
            $this->idMotorista = $_idMotorista;
        }
        public function GetidVeiculo():int{
            return $this->idVeiculo;
        }
        public function SetidVeiculo($_idVeiculo):void{
            $this->idVeiculo = $_idVeiculo;
        }
        public function GetidViagem():int{
            return $this->idViagem;
        }
        public function SetidViagem($_idViagem):void{
            $this->idViagem = $_idViagem;
        }

        public function InsereTrajeto($link){
            $query="INSERT INTO Trajeto VALUES(NULL,".$this->QuilometragemInicial.",".$this->QuilometragemFinal.",'".$this->LI."','".$this->LF."','".$this->HorarioInicio."','".$this->HorarioFim."',".$this->idMotorista.",".$this->idVeiculo.",".$this->idViagem.")";
            
            $link->query($query) or  die ($link->error);
            $this->idVeiculo= $link->insert_id;
        }

        public function GetTrajeto ($link){
            $query="SELECT * FROM Trajeto WHERE idTrajeto = $this->idTrajeto";
            //$query="SELECT * FROM Pessoa";
            $resultado= $link->query($query) or die ($link->error);
            $linha = $resultado->fetch_array();

            $this->idTrajeto = $linha["idTrajeto"];
            $this->QuilometragemInicial = $linha["QuilometragemInicial"];
            $this->QuilometragemFinal = $linha["QuilometragemFinal"];
            
            $this->LI = $linha["LI"];
            $this->LF = $linha["LF"];
            $this->HorarioInicio = $linha["HorarioInicio"];
            $this->HorarioFim = $linha["HorarioFim"];
            $this->idMotorista = $linha["idMotorista"];
            $this->idVeiculo = $linha["idVeiculo"];
            $this->idViagem = $linha["idViagem"];
        }

        public function EncerraTrajeto($link){
            $query="UPDATE Trajeto SET QuilometragemFinal = $this->QuilometragemFinal, HorarioFim = '$this->HorarioFim' WHERE idTrajeto = $this->idTrajeto";
            $link->query($query) or die($link->error);
        }

        
    }   



?>