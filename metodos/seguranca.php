<?php
    include_once'conexao.php';
    $host  = $_SERVER['HTTP_HOST'];
    if(!isset($_SESSION['Nome'])){
        header('Location:localhost/infoprime/rolloutd/pages/examples/sign-in.php');
    }
?>