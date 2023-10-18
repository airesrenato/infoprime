<?php
   require_once "conexao.php";
   require_once "../classes/class_Trajeto.php";
   $host  = $_SERVER['HTTP_HOST'];

   if(!empty($_POST["Cadastrar"])){
       $Obj = new Trajeto(NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
       $Obj->SetQuilometragemInicial($_POST["QuilometragemInicial"]);
       $Obj->SetQuilometragemFinal(0);
       $dataAtual = date('d/m/Y G:i:s');
       $Obj->SetHorarioInicio($dataAtual);
       $Obj->SetHorarioFinal(0);
       $Obj->SetidViagem($_POST["idViagem"]);
       $Obj->SetidVeiculo($_POST["idVeiculo"]);
       $Obj->SetidMotorista($_POST["idMotorista"]);
       $Obj->InsereTrajeto($link);
       
       //header('Location:http://'.$host.'/infoprime/erp/pages/tables/verDetalhesViagem.php?idViagem='.$_POST['idViagem'].'');
   }else{
      echo"falha no enganio";
   }
?>