<?php

    class Lancamento {
        private $idLancamento;
        private $Dia;
        private $Fornecedor;
        private $Compra;
        private $Categoria;
        private $Cartao;
        private $Departamento;
        private $Projeto;
        private $Valor;
        private $Obs;
        private $idUsuario;
        private $idOrdemServico;

        public function __construct($_idLancamento, $_Dia, $_Fornecedor, $_Compra, $_Categoria, $_Cartao, $_Departamento, $_Projeto,
            $_Valor, $_Obs, $_idUsuario, $_idOrdemServico){

                $this->idLancamento =$_idLancamento;
                $this->Dia =$_Dia;
                $this->Fornecedor =$_Fornecedor;
                $this->Compra= $_Compra;
                $this->Categoria = $_Categoria;
                $this->Cartao =$_Cartao;
                $this->Departamento = $_Departamento;
                $this->Projeto = $_Projeto;
                $this->Valor = $_Valor;
                $this->Obs = $_Obs;
                $this->idUsuario = $_idUsuario;
                $this->idOrdemServico = $_idOrdemServico;

        }

        public function GetidLancamento():int{
            return $this->idLancamento;
        }
        public function GetDia():string{
            return $this->Dia;
        }
        public function SetDia($_Dia){
            $this->Dia = $_Dia;
        }
        public function GetFornecedor():string{
            return $this->Fornecedor;
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
        public function GetCategoria():string{
            return $this->Categoria;
        }
        public function SetCategoria($_Categoria):void{
            $this->Categoria = $_Categoria;
        }
        public function GetCartao():string{
            return $this->Cartao;
        }
        public function SetCartao($_Cartao):void{
            $this->Cartao = $_Cartao;
        }
        public function GetDepartamento():string{
            return $this->Departamento;
        }
        public function SetDepartamento($_Departamento):void{
            $this->Departamento = $_Departamento;
        }
        public function GetProjeto():string{
            return $this->Projeto;
        }
        public function SetProjeto($_Projeto):void{
            $this->Projeto = $_Projeto;
        }
        public function GetValor():string{
            return $this->Valor;
        }
        public function SetValor($_Valor):void{
            $this->Valor = $_Valor;
        }
        public function GetObs():string{
            return $this->Obs;
        }
        public function SetObs($_Obs):void{
            $this->Obs;
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


    }

?>