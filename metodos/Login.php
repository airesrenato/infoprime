<?php
ini_set('error_reporting', E_ALL); // mesmo resultado de: error_reporting(E_ALL);
ini_set('display_errors', 1);
	include "conexao.php";
    include "../classes/class_Usuario.php";
    session_start();
    $host  = $_SERVER['HTTP_HOST'];

    if(!empty($_POST["Enviar"])){
       
        $Login = $_POST["Login"];
        $Senha = md5($_POST["Senha"]);	
        
        
        $Obj = new Usuario(NULL, $Login, $Senha, NULL,NULL,NULL);
            
        if($Obj->Verificar($link)){
            $dataAtual = date('d/m/Y G:i:s');
            $linha = $dataAtual." Login -> ".$_SESSION['Nome'].PHP_EOL; 
            //$log = fopen("./logs/log_login.txt","a+");
            //fwrite($log,$linha);
            //fclose($log);

            $query="SELECT * FROM Usuario WHERE Nome ='".$Login."' AND Senha ='".$Senha."'";
            $resultado = $link->query($query) or die($link->error);
           
            while($linha = $resultado->fetch_array()){
              
              /*carregar as informações do banco para as variaveis de sessao*/
              
                $_SESSION['Foto'] = $linha['Foto'];
                $_SESSION['Acesso'] = $linha['Acesso'];  
                $_SESSION['idUsuario'] = $linha['idUsuario'];      
               $_SESSION['Nome'] = $linha['Nome'];
            
            }
		    header('Location:/infoprime/erp');
        }
        else {
            header('Location:/infoprime/erp/pages/examples/sign-in.php');
             
        }
    }



?>