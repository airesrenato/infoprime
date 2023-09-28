<?php
    require_once "../classes/class_Refeicao.php";
    require_once "../classes/class_Participantes.php";
    require_once "conexao.php";
    session_start();    
    $host  = $_SERVER['HTTP_HOST'];
    $dataAtual = date('d/m/Y G:i:s');
    
    if(!empty($_POST["Cadastrar"])){
        //echo $dataAtual;
        $Obj = new Refeicao(NULL,NULL,NULL,NULL,NULL,NULL);
        $Obj->SetTipo($_POST["Tipo"]);
        $Obj->SetValor($_POST["Valor"]);
        $Obj->SetDia(date('d/m/Y G:i:s'));
        $Obj->SetLocalidade($_POST["Localidade"]);

        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "../images/notas/"; //define o diretorio para onde enviaremos o arquivo
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        
        $Obj->SetNotaFiscal($novo_nome);
        $Obj->InsereRefeicao($link);

        $teste = $Obj->GetidRefeicao();
        
        $Obj2 = new Participantes(NULL,NULL);
        $Obj2->SetidRefeicao($Obj->GetidRefeicao());
        $tecnicos = $_POST['tecnicos'];
        foreach ($tecnicos as $t){
            $Obj2->SetidTecnico($t);
            $Obj2->InsereParticipante($link);
        }
        
        header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verRefeicoes.php');


    }

?>