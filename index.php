<?php
    session_start();
    require_once"./metodos/seguranca.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Infoprime</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-blue-grey">
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
    <!-- Top Bar -->
    <?php
        include_once"topBar.php";
    ?>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
                <?php
                    include_once"userInfo.php";
                ?>
            <!-- #User Info -->
            <!-- Menu -->
                <?php
                    include_once"menu.php";
                ?>
            <!-- #Menu -->
            <!-- Footer -->
                <?php
                    //include_once"footer.php";
                ?>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <?php
                                echo "<a href='http://$host/infoprime/rolloutd/pages/tables/verEquipamentos.php'>";
                            ?>
                         <i class="material-icons">playlist_add_check</i>
                        </a>
                        </div>
                        <div class="content">
                            <div class="text">Equipamentos</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                                $mysqli = new mysqli('127.0.0.1','root', '', 'rolloutd');
                                $query = $mysqli->prepare('SELECT * FROM equipamento');
                                $query->execute();
                                $query->store_result();
                                $rows = $query->num_rows;
                                echo $rows;
                                 ?>" data-speed="15" data-fresh-interval="20">
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <?php
                                echo "<a href='http://$host/infoprime/rolloutd/pages/tables/verAcessorios.php'>";
                            ?>
                          <i class="material-icons">help</i></a>
                        </div>
                        <div class="content">
                            <div class="text">Acessórios</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                                $mysqli = new mysqli('localhost','root', '', 'rolloutd');
                                $query = $mysqli->prepare('SELECT * FROM acessorio');
                                $query->execute();
                                $query->store_result();
                                $rows = $query->num_rows;
                                echo $rows;
                                ?>" data-speed="15" data-fresh-interval="20"></div> 
                            </div>
                    </div>
                </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <?php
                                echo "<a href='http://$host/infoprime/rolloutd/pages/tables/verAvarias.php'>";
                            ?>
                            <i class="material-icons">forum</i>
                        </a>
                        </div>
                        <div class="content">
                            <div class="text">Avarias</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                                $mysqli = new mysqli('localhost','root', '', 'rolloutd');
                                $query = $mysqli->prepare('SELECT * FROM avaria');
                                $query->execute();
                                $query->store_result();
                                $rows = $query->num_rows;
                                echo $rows;
                                 ?>" data-speed="15" data-fresh-interval="20">
                            </div>
                        
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <?php
                                echo "<a href='http://10.4.3.150:8080/infoprime/rolloutd/pages/tables/verAtendimentos.php'>";
                            ?>
                            <i class="material-icons">person_add</i>
                        </a>
                        </div>
                        <div class="content">
                            <div class="text">Atendimentos</div>
                            <div class="number count-to" data-from="0" data-to="<?php
                                $mysqli = new mysqli('localhost','root', '', 'rolloutd');
                                $query = $mysqli->prepare('SELECT * FROM atendimento');
                                $query->execute();
                                $query->store_result();
                                $rows = $query->num_rows;
                                echo $rows;
                                 ?>" data-speed="15" data-fresh-interval="20">
                            </div>
                        
                        </div>
                    </div>
                </div>
                    <!-- #END# Widgets -->
            </div>
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="plugins/raphael/raphael.min.js"></script>
    <script src="plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    <script src="plugins/flot-charts/jquery.flot.js"></script>
    <script src="plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="plugins/flot-charts/jquery.flot.time.js"></script>

    <!-- Sparkline Chart Plugin Js -->
    <script src="plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
