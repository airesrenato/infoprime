<?php
     require_once "../classes/class_OrdemServico.php";
     require_once "conexao.php";
     session_start();    
     $host  = $_SERVER['HTTP_HOST'];
     $dataAtual = date('d/m/Y G:i:s');

     if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $Obj = new OrdemServico(NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $Obj->SetDescricao($_POST["Descricao"]);
        $Obj->SetSolicitante($_POST["Solicitante"]);
        $Obj->SetContatoSolicitante($_POST["ContatoSolicitante"]);
        $Obj->SetStatus("Aberto");

        $Obj->SetidUsuario($_SESSION["idUsuario"]);
        $Obj->SetidLider($_SESSION["idUsuario"]);
       

        /* pegar o idUsuario por sessao e o idOrdemServico por get ou post pelo formulario


        $Obj->SetidUsuario($_SESSION["idUsuario"]);
        $Obj->SetidUsuario($_POST["idOrdemServico"]);


        -----------------------------

        /*
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/notas/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        */
        $Obj->InsereOrdemServico($link);

        
        //header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verRefeicoes.php');


    }


?>