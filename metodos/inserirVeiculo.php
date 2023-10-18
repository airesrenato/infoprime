<?php
    require_once "conexao.php";
    require_once "../classes/class_Veiculo.php";

    $host  = $_SERVER['HTTP_HOST'];

    if(!empty($_POST["Cadastrar"])){
        $Obj = new Veiculo(NULL,NULL,NULL,NULL);
        $Obj->SetMarca($_POST["Marca"]);
        $Obj->SetModelo($_POST["Modelo"]);
        $Obj->SetPlaca($_POST["Placa"]);
        $Obj->InsereVeiculo($link);
    }else{
        echo"falha no enganio";
    }
    
    //header('Location:http://'.$host.'/infoprime/erp/pages/tables/verVeiculos.php');
?>