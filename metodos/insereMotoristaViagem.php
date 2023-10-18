<?php
    require_once "../classes/class_MotoristaViagem.php";
    
    require_once "./conexao.php";

    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');
    
    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $motoristas = $_POST['motoristas'];

        
        foreach ($motoristas as $m){
            
            $Obj = new MotoristaViagem(NULL,NULL);
            $Obj->SetidMotorista($m);
            $Obj->SetidViagem($_POST['idViagem']);
            $Obj->InsereMotoristaViagem($link);
        }
        
      //  header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
    }

?>