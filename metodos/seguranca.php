<?php
    include_once'conexao.php';
    $host  = $_SERVER['HTTP_HOST'];
    if(!isset($_SESSION['Acesso'])){
        header('Location:../erp/pages/examples/sign-in.php');
    }
?>