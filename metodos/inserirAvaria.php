<?php
	include("conexao.php");
    $host  = $_SERVER['HTTP_HOST'];
    $msg = false;
    if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
        $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
        $diretorio = "upload/"; //define o diretorio para onde enviaremos o arquivo
        $Descricao = $_POST["Descricao"];
        $VC = $_POST["vc"];
        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
        $sql_code = "INSERT INTO avaria VALUES(null, '$Descricao', '$novo_nome', $VC)";
        $link->query($sql_code) or die($link->error);
	    header('Location:http://'.$host.'/infoprime/rolloutd/index.php');
    }

?>
