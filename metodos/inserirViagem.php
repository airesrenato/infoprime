<?php

    require_once"conexao.php";
    require_once"../classes/class_Viagem.php";
    $host  = $_SERVER['HTTP_HOST'];

    if(!empty($_POST["Cadastrar"])){
        $Obj = new Viagem(NULL,NULL,NULL,NULL,NULL,NULL);
        $Obj->SetOrigem($_POST["Origem"]);
        $Obj->SetDestino($_POST["Destino"]);
        $Obj->SetDiaSaida($_POST["DiaSaida"]);
        $Obj->SetDiaChegada($_POST["DiaChegada"]);
        $Obj->SetStatus($_POST["Status"]);
        $Obj->InsereViagem($link);
  
    }else{
        echo"falha no enganio";
    }
   // header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verViagens.php');
?>