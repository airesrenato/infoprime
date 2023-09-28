<?php
    include("conexao.php");
    $host  = $_SERVER['HTTP_HOST'];
    $msg = false;
    $idTecnico = 1; //teste
    if(isset($_FILES['arquivo'])){
        $query = "SELECT * FROM atendimento WHERE email = '".$_POST["Email"]."';";
        $resultado = $link->query($query) or die ($link->error);
        if($resultado->num_rows >= 1){
            header('Location:http://10.4.3.150:8080/infoprime/rolloutd/pages/examples/500.html');        
        }else{
            $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
            $novo_nome = md5(time()) . $extensao; //define o nome do arquivo
            $diretorio = "images/termos/"; //define o diretorio para onde enviaremos o arquivo
            $Responsavel = $_POST["Responsavel"];
            $Email = $_POST["Email"];
            $Departamento = $_POST["Departamento"];
            $Localidade = $_POST["Localidade"];
            $Backup = $_POST["Backup"];
            $Dia = $_POST["Dia"];
            $idAntigo = $_POST["VCAntigo"];
            $idNovo = $_POST["VCNovo"];
            move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
            $sql_code = "INSERT INTO atendimento VALUES(null, '$Responsavel','$Email','$Departamento','$Localidade','$Backup','$Dia', '$novo_nome', $idAntigo, $idNovo, $idTecnico)";
            $link->query($sql_code) or die($link->error);
            header('Location:http://'.$host.'/infoprime/rolloutd/index.php');
        }
    }
?>
