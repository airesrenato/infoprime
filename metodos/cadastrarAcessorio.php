<?php
    require_once "./classes/class_Acessorio.php";
    require_once "conexao.php";
    $host  = $_SERVER['HTTP_HOST'];
    if(!empty($_POST["Cadastrar"])){
        $Obj = new Acessorio(NULL,NULL,NULL,NULL);
        $Obj->SetTipo($_POST["Tipo"]);
        $Obj->SetMarca($_POST["Marca"]);
        $Obj->SetidEquipamento($_POST["vc"]);
        $Obj->InsereAcessorio($link);
        header('Location:http://'.$host.'/infoprime/rolloutd/index.php');
    }
?>