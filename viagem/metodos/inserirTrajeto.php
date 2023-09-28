<?php
   

   require_once"conexao.php";
   require_once"../classes/class_Trajeto.php";
   $host  = $_SERVER['HTTP_HOST'];

   if(!empty($_POST["Cadastrar"])){
       $Obj = new Trajeto(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
       $Obj->SetQuilometragemInicial($_POST["QuilometragemInicial"]);
       $Obj->SetQuilometragemFinal(0);
       $Obj->SetLI('emdev');
       $Obj->SetLF('emdev');
       $dataAtual = date('d/m/Y G:i:s');
       $Obj->SetHorarioInicio($dataAtual);
       $Obj->SetHorarioFim(0);
       $Obj->SetidMotorista($_POST["Motorista"]);
       $Obj->SetidVeiculo($_POST["Veiculo"]);
       $Obj->SetidViagem($_POST["idViagem"]);
       
       $Obj->InsereTrajeto($link);
       header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
 
   }else{
      echo"falha no enganio";
   }
?>