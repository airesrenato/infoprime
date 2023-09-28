<?php
    require_once "../classes/class_ViagemMotorista.php";
    
    require_once "../metodos/conexao.php";

    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');
    
    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $motoristas = $_POST['motoristas'];

        
        foreach ($motoristas as $m){
            
            $Obj = new ViagemMotorista(NULL,NULL);
            $Obj->SetidMotorista($m);
            $Obj->SetidViagem($_POST['idViagem']);
            $Obj->InsereViagemMotorista($link);
        }
        
        header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
    }

?>