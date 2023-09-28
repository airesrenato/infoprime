<?php

    session_start();
    include '../../viagem/metodos/conexao.php';
    require_once '../../viagem/classes/class_Trajeto.php';
    $host  = $_SERVER['HTTP_HOST'];


    if (!empty($_GET["idTrajeto"])){
        $alterar = new Trajeto ($_GET["idTrajeto"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);    
            $_SESSION['idTrajeto'] = $_GET["idTrajeto"];
            $alterar->GetTrajeto($link,$_GET['idTrajeto']);
        echo "
        <!DOCTYPE html>
        <html>

        <head>
            <meta charset='UTF-8'>
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
            <title>Forgot Password | Bootstrap Based Admin Template - Material Design</title>
            <!-- Favicon-->
            <link rel='icon' href='../../favicon.ico' type='image/x-icon'>

            <!-- Google Fonts -->
            <link href='https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext' rel='stylesheet' type='text/css'>
            <link href='https://fonts.googleapis.com/icon?family=Material+Icons' rel='stylesheet' type='text/css'>

            <!-- Bootstrap Core Css -->
            <link href='../../plugins/bootstrap/css/bootstrap.css' rel='stylesheet'>

            <!-- Waves Effect Css -->
            <link href='../../plugins/node-waves/waves.css' rel='stylesheet' />

            <!-- Animation Css -->
            <link href='../../plugins/animate-css/animate.css' rel='stylesheet' />

            <!-- Custom Css -->
            <link href='../../css/style.css' rel='stylesheet'>
        </head>

        <body class='fp-page'>
            <div class='fp-box'>
                
                <div class='card'>
                    <div class='body'>
                        <form name='trajeto' action='alterarTrajeto.php' method='POST'>
                            <div class='msg'>
                               Insira a quilometragem final.
                            </div>
                            <div class='input-group'>
                                <span class='input-group-addon'>
                                    <i class='material-icons'>panorama_photosphere</i>
                                </span>
                                <div class='form-line'>
                                    <input type='text' class='form-control' name='QuilometragemFinal'  required autofocus>
                                </div>
                            </div>
                            
                            <input type='submit' name='Enviar' class='btn btn-primary ' value='Encerrar'>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Jquery Core Js -->
            <script src='../../plugins/jquery/jquery.min.js'></script>

            <!-- Bootstrap Core Js -->
            <script src='../../plugins/bootstrap/js/bootstrap.js'></script>

            <!-- Waves Effect Plugin Js -->
            <script src='../../plugins/node-waves/waves.js'></script>

            <!-- Validation Plugin Js -->
            <script src='../../plugins/jquery-validation/jquery.validate.js'></script>

            <!-- Custom Js -->
            <script src='../../js/admin.js'></script>
            <script src='../../js/pages/examples/forgot-password.js'></script>
        </body>

        </html>";
    }else if(!empty ($_POST["Enviar"])){
        $alterar = new Trajeto ($_SESSION["idTrajeto"],NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
        $alterar->SetQuilometragemFinal($_POST['QuilometragemFinal']);
        $dataAtual = date('d/m/Y G:i:s');
        $alterar->SetHorarioFim($dataAtual);
        $alterar->EncerraTrajeto($link);
        header('Location:http://'.$host.'/infoprime/rolloutd/pages/tables/verViagens.php?');   
    }
?>