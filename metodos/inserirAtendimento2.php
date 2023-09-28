<?php
require_once "./classes/class_Equipamento.php";
require_once "./classes/class_Acessorio.php";
require_once "./classes/class_Atendimento.php";
require_once "conexao.php";
session_start();    
$host  = $_SERVER['HTTP_HOST'];

if(!empty($_POST["Cadastrar"])){
    $Obj = new Equipamento(NULL,NULL,NULL,NULL);
    $Obj->SetModelo($_POST["ModeloAntigo"]);
    $Obj->SetVC($_POST["PatrimonioAntigo"]);
    $Obj->SetServiceTag($_POST["ServiceTagAntigo"]);
    if($Obj->ExisteVC($link,$_POST["PatrimonioAntigo"])){
    header('Location:https://'.$host.'/infoprime/rolloutd/pages/examples/500.html');
    }else{
        $dataAtual = date('d/m/Y G:i:s');
        $linha = $dataAtual." ". $_SESSION['Nome']." Cadastrou -> ".$_POST['PatrimonioAntigo']." ".PHP_EOL; 
        $log = fopen("./logs/log_ce.txt","a+");
        fwrite($log,$linha);
        fclose($log);
        $Obj->InsereEquipamento($link);
        $idAntigo = $Obj->GetidEquipamento();

        if(isset($_POST['monitorAntigo'])){
            $Monitor = new Acessorio(NULL,NULL,NULL,NULL);
            $Monitor->SetTipo('Monitor');
            $Monitor->SetMarca($_POST["monitorAntigoMarca"]);
            $Monitor->SetidEquipamento($idAntigo);
            $Monitor->InsereAcessorio($link);
        }
        if(isset($_POST['mouseAntigo'])){
            $Mouse = new Acessorio(NULL,NULL,NULL,NULL);
            $Mouse->SetTipo('Mouse');
            $Mouse->SetMarca($_POST["mouseAntigoMarca"]);
            $Mouse->SetidEquipamento($idAntigo);
            $Mouse->InsereAcessorio($link);
        }
        if(isset($_POST['tecladoAntigo'])){
            $Teclado = new Acessorio(NULL,NULL,NULL,NULL);
            $Teclado->SetTipo('Teclado');
            $Teclado->SetMarca($_POST["tecladoAntigoMarca"]);
            $Teclado->SetidEquipamento($idAntigo);
            $Teclado->InsereAcessorio($link);
        }
        if(isset($_POST['carregadorAntigo'])){
            $Carregador = new Acessorio(NULL,NULL,NULL,NULL);
            $Carregador->SetTipo('Carregador');
            $Carregador->SetMarca($_POST["tecladoAntigoMarca"]);
            $Carregador->SetidEquipamento($idAntigo);
            $Carregador->InsereAcessorio($link);
        }



    $Obj2 = new Equipamento(NULL,NULL,NULL,NULL);
    $Obj2->SetModelo($_POST["Modelo"]);
    $Obj2->SetVC($_POST["Patrimonio"]);
    $Obj2->SetServiceTag($_POST["ServiceTag"]);
    if($Obj2->ExisteVC($link,$_POST["Patrimonio"])){
    header('Location:https://'.$host.'/infoprime/rolloutd/pages/examples/500.html');
    }else{
        $dataAtual = date('d/m/Y G:i:s');
        $linha = $dataAtual." ". $_SESSION['Nome']." Cadastrou -> ".$_POST['Patrimonio']." ".PHP_EOL; 
        $log = fopen("./logs/log_ce.txt","a+");
        fwrite($log,$linha);
        fclose($log);
        $Obj2->InsereEquipamento($link);
        $idNovo = $Obj2->GetidEquipamento();

        if(isset($_POST['monitordell'])){
            $Monitor = new Acessorio(NULL,NULL,NULL,NULL);
            $Monitor->SetTipo('Monitor');
            $Monitor->SetMarca('Dell');
            $Monitor->SetidEquipamento($idNovo);
            $Monitor->InsereAcessorio($link);
        }
        if(isset($_POST['mousedell'])){
            $Mouse = new Acessorio(NULL,NULL,NULL,NULL);
            $Mouse->SetTipo('Mouse');
            $Mouse->SetMarca('Dell');
            $Mouse->SetidEquipamento($idNovo);
            $Mouse->InsereAcessorio($link);
        }
        if(isset($_POST['tecladodell'])){
            $Teclado = new Acessorio(NULL,NULL,NULL,NULL);
            $Teclado->SetTipo('Teclado');
            $Teclado->SetMarca('Dell');
            $Teclado->SetidEquipamento($idNovo);
            $Teclado->InsereAcessorio($link);
        }
        if(isset($_POST['carregadordell'])){
            $Carregador = new Acessorio(NULL,NULL,NULL,NULL);
            $Carregador->SetTipo('Carregador');
            $Carregador->SetMarca('Dell');
            $Carregador->SetidEquipamento($idNovo);
            $Carregador->InsereAcessorio($link);
        }

    }




    $Atendimento = new Atendimento(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
    $Atendimento->SetResponsavel($_POST['Responsavel']);
    $Atendimento->SetEmail($_POST['Email']);
    $Atendimento->SetDepartamento($_POST['Departamento']);
    $Atendimento->SetLocalidade($_POST['Localidade']);
    $Atendimento->SetBackup($_POST['Backup']);
    $Atendimento->SetDia($_POST['Data']);

    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
    $diretorio = "images/termos/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
    $Atendimento->SetTermo($novo_nome);

   // $Atendimento->SetTermo($_POST['Termo'])



    $Atendimento->SetAntigo($idAntigo);
    $Atendimento->SetNovo($idNovo);
    $Atendimento->SetidTecnico($_SESSION['idTecnico']);


    $Atendimento->InsereAtendimento($link);
    header('Location:http://'.$host.'/infoprime/rolloutd/index.php');
    
}
}





?>