<?php
    require_once "../classes/class_ViagemVeiculo.php";
    
    require_once "../metodos/conexao.php";

    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');
    
    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $veiculos = $_POST['veiculos'];

        
        foreach ($veiculos as $v){
            
            $Obj = new ViagemVeiculo(NULL,NULL);
            $Obj->SetidVeiculo($v);
            $Obj->SetidViagem($_POST['idViagem']);
            $Obj->InsereViagemVeiculo($link);
        }  
    }

    header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
?>