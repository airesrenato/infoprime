<?php
    require_once"seguranca.php";
    session_start();
    $destino='./logs/log_logout.txt';
    $arq = fopen($destino,"a+");
    $data = date('H:i:s d/m/Y');
    $linha = PHP_EOL.$_SESSION['Nome']." deslogou por opção as ".$data.PHP_EOL;
    fwrite($arq,$linha);
    fclose($arq);
    unset($_SESSION['Nome']);
    header("Location: index.php");

?>