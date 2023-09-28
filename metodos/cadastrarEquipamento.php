<?php
    require_once "./classes/class_Equipamento.php";
    require_once "conexao.php";
    session_start(); 
    $host  = $_SERVER['HTTP_HOST'];
    if(!empty($_POST["Cadastrar"])){
        $Obj = new Equipamento(NULL,NULL,NULL,NULL);
        $Obj->SetModelo($_POST["Modelo"]);
        $Obj->SetVC($_POST["VC"]);
        $Obj->SetServiceTag($_POST["ServiceTag"]);
        if($Obj->ExisteVC($link,$_POST["VC"])){
        header('Location:http://'.$host.'/infoprime/rolloutd/pages/examples/500.html');
        }else{
            $dataAtual = date('d/m/Y G:i:s');
            $linha = $dataAtual." ". $_SESSION['Nome']." Cadastrou -> ".$_POST['VC']." ".PHP_EOL; 
            $log = fopen("./logs/log_ce.txt","a+");
            fwrite($log,$linha);
            fclose($log);
        $Obj->InsereEquipamento($link);
        header('Location:http://'.$host.'/infoprime/rolloutd/index.php');
        }
    }
?>