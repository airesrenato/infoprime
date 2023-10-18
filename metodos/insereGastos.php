<?php
    require_once "../classes/class_Gasto.php";
    require_once "../classes/class_OrdemServico.php";
    require_once "conexao.php";
    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');


    if(!empty($_POST["Cadastrar"])){
        echo $dataAtual;
        $Obj = new Gasto(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $Obj->SetCategoria($_POST["Categoria"]);
        $Obj->SetDiaGasto($_POST["DiaGasto"]);
        $Obj->SetFornecedor($_POST["Fornecedor"]);
        $Obj->SetCompra($_POST["Compra"]);
        $Obj->SetDepartamento($_POST["Departamento"]);
        $Obj->SetValor($_POST["Valor"]);
        $Obj->SetObservacao($_POST["Obs"]);
        /* pegar o idUsuario por sessao e o idOrdemServico por get ou post pelo formulario*/


        $Obj->SetidUsuario($_SESSION["idUsuario"]);
        $Obj->SetidordemServico($_POST["idordemServico"]);


     

        /*
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/notas/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        */

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/notas/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        
        $Obj->SetNota($novo_nome);
        $Obj->InsereGasto($link);

        
        //header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verRefeicoes.php');


    } 
    echo'odskoas';
?>