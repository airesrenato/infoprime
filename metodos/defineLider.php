<?php
    require_once "../classes/class_OrdemServico.php";
    
    require_once "./conexao.php";

    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');
    
    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $lider = $_POST['idLider'];
        $idordemServico = $_POST['idordemServico'];

        $Obj = new OrdemServico(NULL,NULL,NULL,NULL,NULL,NULL,NULL);

        $Obj->SetidLider($lider);
        $Obj->SetidOrdemServico($idordemServico);

        $Obj->DefineLider($link);
        
        
      //  header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
    }

?>