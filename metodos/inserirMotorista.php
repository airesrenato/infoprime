<?php
    require_once "conexao.php";
    require_once "../classes/class_Motorista.php";
    $host  = $_SERVER['HTTP_HOST'];

    if(!empty($_POST["Cadastrar"])){
        $Obj = new Motorista(NULL,NULL,NULL);
        $Obj->SetNome($_POST["Nome"]);
        $Obj->SetidUsuario($_POST["idUsuario"]);
        $Obj->InsereMotorista($link);
    }else{
        echo"falha no enganio";
    }
    
    //header('Location:http://'.$host.'/infoprime/erp/pages/tables/verMotoristas.php');
?>