<?php
    require_once "../classes/class_UsuarioOrdemServico.php";
    
    require_once "./conexao.php";

    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');
    
    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $colaboradores = $_POST['colaboradores'];

        
        foreach ($colaboradores as $c){
            
            $Obj = new UsuarioOrdemServico(NULL,NULL);
            $Obj->SetidUsuario($c);
            $Obj->SetidOrdemServico($_POST['idordemServico']);
            $Obj->InsereUsuarioOrdemServico($link);
        }
        
      //  header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
    }

?>