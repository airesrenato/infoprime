<?php
    session_start();
    require_once "../../metodos/seguranca.php";
    require_once"../../viagem/metodos/conexao.php";
    $host  = $_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Viagens</title>
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

    <!-- JQuery DataTable Css -->
    <link href="../../plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

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
            <p>Um Momento...</p>
        </div>
    </div> 
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
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
              //  include_once"../../footer.php";
            ?>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->      
    </section>

    <section class="content">
        <div class="container-fluid"> 
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Veiculos relacionados para essa viagem.
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <?php  
                                            echo"    <li><a href='http://$host/infoprime/rolloutd/pages/forms/atrelarVeiculo.php?idViagem=".$_GET['idViagem']."'>Atrelar Veículo</a></li>";
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Placa</th>
                                              
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Marca</th>
                                            <th>Modelo</th>
                                            <th>Placa</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query="SELECT * FROM Viagem vi INNER JOIN ViagemVeiculo vv ON vi.idViagem = vv.idViagem INNER JOIN Veiculo ve on vv.idVeiculo = ve.idVeiculo WHERE vi.idViagem = ".$_GET['idViagem']."";
                                            $resultado=$link->query($query) or die ($link->error);
                                            while($linha = $resultado->fetch_array()){
                                                echo"  <tr>".
                                                    "<td>".$linha["Marca"]."</td>
                                                    <td>".$linha["Modelo"]."</td>
                                                    <td>".$linha["Placa"]."</td>
                                                </tr>";
                                            }
                                        ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-- #END# Exportable Table -->
            <!-- Exportable Table -->
            
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Motoristas da viagem.
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                    <?php    echo"    <li><a href='http://$host/infoprime/rolloutd/pages/forms/atrelarMotorista.php?idViagem=".$_GET['idViagem']."'>Atrelar Motorista</a></li>";
                                 
                                    ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Origem</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Origem</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            $query="SELECT * FROM Viagem v INNER JOIN  ViagemMotorista vm ON v.idViagem = vm.idViagem INNER JOIN  Motorista m ON vm.idMotorista = m.idMotorista WHERE v.idViagem = ".$_GET['idViagem']."";
                                            $resultado=$link->query($query) or die ($link->error);
                                            while($linha = $resultado->fetch_array()){
                                                echo"  <tr>".
                                                    "
                                                    <td>".$linha["Nome"]."</td>
                                                </tr>";
                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               Trajetos da Viagem.
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <?php  
                                            echo"    <li><a href='http://$host/infoprime/rolloutd/pages/forms/cadastrarTrajeto.php?idViagem=".$_GET['idViagem']."'>Cadastrar Trajeto</a></li>";
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                        <th scope="col">Nome Motorista</th>
                                            <th scope="col">Quilometragem Inicial</th>
                                            <th scope="col">Quilometragem Final</th>
                                            <th scope="col">Horario Inicio</th>
                                            <th scope="col">Horario Final</th>
                                            <th scope="col">Veículo</th>
                                            <th scope="col">Placa</th>
                                            <th scope="col">Encerrar</th>  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th scope="col">Nome Motorista</th>
                                            <th scope="col">Quilometragem Inicial</th>
                                            <th scope="col">Quilometragem Final</th>
                                            <th scope="col">Horario Inicio</th>
                                            <th scope="col">Horario Final</th>
                                            <th scope="col">Veículo</th>
                                            <th scope="col">Placa</th>
                                            <th scope="col">Encerrar</th> 
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        $query="SELECT * FROM Trajeto T INNER JOIN Motorista M ON T.idMotorista = M.idMotorista INNER JOIN Veiculo Ve ON T.idVeiculo = Ve.idVeiculo INNER JOIN Viagem Vi ON T.idViagem = Vi.idViagem WHERE T.idViagem = ".$_GET['idViagem']."";
                                        $resultado=$link->query($query) or die ($link->error);
                                        while($linha = $resultado->fetch_array()){
                                            if($linha['QuilometragemFinal'] == 0 ){
                                                echo"  <tr>".
                                                "
                                                <td>".$linha["Nome"]."</td>
                                                <td>".$linha["QuilometragemInicial"]."</td>
                                                <td>".$linha["QuilometragemFinal"]."</td>
                                                <td>".$linha["HorarioInicio"]."</td>
                                                <td>".$linha["HorarioFim"]."</td>
                                                <td>".$linha["Modelo"]."</td>
                                                <td>".$linha["Placa"]."</td>
                                                <td> <a href='http://$host/infoprime/rolloutd/pages/forms/alterarTrajeto.php?idTrajeto=".$linha["idTrajeto"]."'>Encerrar</td>
                                                </tr>";

                                            }else{
                                                echo"  <tr>".
                                                    "
                                                    <td>".$linha["Nome"]."</td>
                                                    <td>".$linha["QuilometragemInicial"]."</td>
                                                    <td>".$linha["QuilometragemFinal"]."</td>
                                                    <td>".$linha["HorarioInicio"]."</td>
                                                    <td>".$linha["HorarioFim"]."</td>
                                                    <td>".$linha["Modelo"]."</td>
                                                    <td>".$linha["Placa"]."</td>
                                                    <td>Encerrado</td>
                                                </tr>";
                                            }
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
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

    <!-- Jquery DataTable Plugin Js -->
    <script src="../../plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="../../plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="../../plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
