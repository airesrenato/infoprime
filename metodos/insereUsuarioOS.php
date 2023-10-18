<?php

    require_once "../classes/class_UsuarioOrdemServico.php";  
    require_once "../metodos/conexao.php";

    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');

    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $usuarios = $_POST['usuarios'];

        
        foreach ($usuarios as $u){
            
            $Obj = new UsuarioOrdemServico(NULL,NULL);
            $Obj->SetidUsuario($u);
            $Obj->SetidOrdemServico($_POST['idOrdemServico']);
            $Obj->InsereUsuarioOrdemServico($link);
        }
        
       // header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
    }


?>