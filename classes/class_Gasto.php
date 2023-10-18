<?php
    class Gasto {
        private $idGasto;
        private $Categoria;
        private $DiaGasto;
        private $Fornecedor;
        private $Compra;
        private $Departamento;
        private $Valor;
        private $Observacao;
        private $Nota;
        private $idUsuario;
        private $idOrdemServico;

        public function __construct($_idGasto, $_Categoria, $_DiaGasto, $_Fornecedor, $_Compra,
         $_Departamento, $_Valor, $_Observacao,$_Nota, $_idUsuario, $_idOrdemServico){
            $this->idGasto = $_idGasto;
            $this->Categoria = $_Categoria;
            $this->DiaGasto = $_DiaGasto;
            $this->Fornecedor = $_Fornecedor;
            $this->DiaGasto = $_DiaGasto;
            $this->Fornecedor = $_Fornecedor;
            $this->Compra = $_Compra;
            $this->Departamento = $_Departamento;
            $this->Valor = $_Valor;
            $this->Observacao = $_Observacao;
            $this->Nota = $_Nota;
            $this->idUsuario = $_idUsuario;
            $this->idOrdemServico = $_idOrdemServico;
        }

        public function GetidGasto():int{
            return $this->idGasto;
        }
        public function GetCategoria():string{
            return $this->Categoria;
        }
        public function SetCategoria($_Categoria):void{
            $this->Categoria = $_Categoria;
        }
        public function GetDiaGasto():string{
            return $this->DiaGasto;
        }
        public function SetDiaGasto($_DiaGasto):void{
            $this->DiaGasto = $_DiaGasto;
        }
        public function GetFornecedor():string{
            return $this->Fornecedor = $_Fornecedor;
        }
        public function SetFornecedor($_Fornecedor):void{
            $this->Fornecedor = $_Fornecedor;
        }
        public function GetCompra():string{
            return $this->Compra;
        }
        public function SetCompra($_Compra):void{
            $this->Compra = $_Compra;
        }
        public function GetDepartamento():string{
            return $this->Departamento;
        }
        public function SetDepartamento($_Departamento):void{
            $this->Departamento = $_Departamento;
        }
        public function GetValor():string{
            return $this->Valor;
        }
        public function SetValor($_Valor):void{
            $this->Valor = $_Valor;
        }
        public function GetObservacao():string{
            return $this->Observacao;
        }
        public function SetObservacao($_Observacao):void{
            $this->Observacao = $_Observacao;
        }
        public function GetNota():string{
            return $this->Nota;
        }
        public function SetNota($_Nota):void{
            $this->Nota = $_Nota;
        }
        public function GetidUsuario():int{
            return $this->idUsuario;
        }
        public function SetidUsuario($_idUsuario):void{
            $this->idUsuario = $_idUsuario;
        }
        public function GetidOrdemServico():int{
            return $this->idOrdemServico;
        }
        public function SetidOrdemServico($_idOrdemServico):void{
            $this->idOrdemServico = $_idOrdemServico;
        }

        public function InsereGasto($link){
            $query="INSERT INTO gasto VALUES(NULL,'".$this->Categoria."','".$this->DiaGasto."','".$this->Fornecedor."','".$this->Compra."','".$this->Departamento."','".$this->Valor."','".$this->Observacao."',".$this->idOrdemServico.",".$this->idUsuario.",'".$this->Nota."')";
            echo $query;
            $link->query($query) or die ($link->error);
            $this->idGasto= $link->insert_id;
        }
        
       



    }

?>