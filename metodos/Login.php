<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
	include "conexao.php";
    include "./classes/class_Tecnico.php";
    session_start();
    $host  = $_SERVER['HTTP_HOST'];

    if(!empty($_POST["Enviar"])){
    	//echo'oi';
        $Nome = $_POST["Nome"];
        $Senha = $_POST["Senha"];	
                           								
        $Obj = new Tecnico(NULL, $Nome, $Senha, NULL,NULL);
		
            if($Obj->Verificar($link)){
            $_SESSION['Nome'] = $Nome;
            $dataAtual = date('d/m/Y G:i:s');
            $linha = $dataAtual." Login -> ".$_SESSION['Nome'].PHP_EOL; 
            $log = fopen("./logs/log_login.txt","a+");
            fwrite($log,$linha);
            fclose($log);
            $query="SELECT * FROM tecnico WHERE Nome ='".$_SESSION['Nome']."' AND Senha ='".$Senha."'";
            $resultado = $link->query($query) or die($link->error);
            while($linha = $resultado->fetch_array()){
                $_SESSION['Foto'] = $linha['Foto'];
                $_SESSION['Email'] = $linha['Email'];  
                $_SESSION['idTecnico'] = $linha['idTecnico'];       
            }
		    header('Location:localhost/infoprime/rolloutd/index.php');
            }else {
                header('Location:/rolloutd/pages/examples/sign-in.php');
            }
    }



?>