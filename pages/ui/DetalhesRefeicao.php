<?php
    session_start();
    require_once "../../seguranca.php";
    $_GET['idRefeicao'];
   
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Infoprime</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../../css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Um momento...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <?php
        include_once"../../topBar.php";
    ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <?php
                include_once"../../userInfo.php";
            ?>
            <!-- #User Info -->
            <!-- Menu -->
            <?php
                include_once"../../menu.php";
            ?>
            <!-- #Menu -->
            <!-- Footer -->
            <?php
                include_once"../../footer.php";
            ?>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
       
        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Informações da Refeição</h2>
            </div>
            <!-- Example Tab -->
            
            <!-- #END# Example Tab -->
            <!-- Tabs With Only Icon Title -->
           
            <!-- #END# Tabs With Only Icon Title -->
            <!-- Tabs With Icon Title -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                NAVEGUE PELAS ABAS PARA VISUALIZAR AS INFORMAÇÕES
                            </h2>
                            
                        </div>
                        <div class="body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active">
                                    <a href="#home_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">home</i> Informações
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#profile_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Participantes
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">email</i> Nota Fiscal
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i> SETTINGS
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <b>Home Content</b>
                                    <p>
                                    <?php
                                        $query="SELECT * FROM refeicao where idRefeicao = ". $_GET['idRefeicao']."";
                                        $resultado=$link->query($query) or die ($link->error);
                                        while($linha = $resultado->fetch_array()){
                                            echo
                                                "<br> Tipo de Refeição: ".$linha["Tipo"]."<br>
                                                
                                                <br> Valor da refeição: ".$linha["Valor"]."<br>
                                                <br> Data da refeição: ".$linha["Dia"]."<br>
                                                <br> Local: ".$linha["Localidade"]."<br>
                                                
                                            ";
                                        } 
                                    
                                    ?>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <b>Técnicos</b>
                                    <p>
                                    <?php
                                        
                                        $query="SELECT * FROM participantes p INNER JOIN tecnico t ON p.idTecnico = t.idTecnico INNER JOIN refeicao r on p.idRefeicao = r.idRefeicao WHERE r.idRefeicao = ". $_GET['idRefeicao']."";
                                        $resultado=$link->query($query) or die ($link->error);
                                        while($linha = $resultado->fetch_array()){
                                            echo
                                                "<br> Técnico: ".$linha["Nome"]."<br>
                                                
                                                <br> Email: ".$linha["Email"]."<br>
                                            ";
                                        }
                                    
                                    ?>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <b>Nota Fiscal</b>
                                    <p>
                                <div class="body">
                                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <?php
                                            $query="SELECT * FROM refeicao where idRefeicao = ". $_GET['idRefeicao']."";
                                            $resultado=$link->query($query) or die ($link->error);
                                            while($linha = $resultado->fetch_array()){
                                                echo
                                                "<img class='img-responsive thumbnail' src='../../images/notas/".$linha['NotaFiscal']."'>
                                                 ";
                                            }
                                        ?>
                                </div>
                            </div>
                        </div>
                                    </p>
                    </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    <b>Settings Content</b>
                                    <p>
                                        Lorem ipsum dolor sit amet, ut duo atqui exerci dicunt, ius impedit mediocritatem an. Pri ut tation electram moderatius.
                                        Per te suavitate democritum. Duis nemore probatus ne quo, ad liber essent aliquid
                                        pro. Et eos nusquam accumsan, vide mentitum fabellas ne est, eu munere gubergren
                                        sadipscing mel.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Tabs With Icon Title -->
            <!-- Tabs With Material Design Colors -->
           
            <!-- #END# Tabs With Material Design Colors -->
            <!-- Tabs With Custom Animations -->
            
            <!-- #END# Tabs With Custom Animations -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="../../plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="../../plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="../../plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
