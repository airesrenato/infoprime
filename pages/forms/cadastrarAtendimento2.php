<?php
    session_start();
    require_once "../../metodos/seguranca.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastrar Atendimento</title>

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

    <!-- Colorpicker Css -->
    <link href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" />

    <!-- Dropzone Css -->
    <link href="../../plugins/dropzone/dropzone.css" rel="stylesheet">

    <!-- Multi Select Css -->
    <link href="../../plugins/multi-select/css/multi-select.css" rel="stylesheet">

    <!-- Bootstrap Spinner Css -->
    <link href="../../plugins/jquery-spinner/css/bootstrap-spinner.css" rel="stylesheet">

    <!-- Bootstrap Tagsinput Css -->
    <link href="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">

    <!-- Bootstrap Select Css -->
    <link href="../../plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- noUISlider Css -->
    <link href="../../plugins/nouislider/nouislider.min.css" rel="stylesheet" />

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
            <p>Aguarde Um Momento...</p>
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
                //include_once"../../footer.php";
            ?>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Cadastrar Atendimento
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="card">
                                        <form method="post" action="../../metodos/inserirAtendimento2.php" enctype="multipart/form-data">
                                            <div class="header">
                                                <h2>EQUIPAMENTO ANTIGO</h2>
                                            </div>
                                            <div class="body">
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="ModeloAntigo" >
                                                        <label class="form-label">Modelo</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="ServiceTagAntigo" >
                                                        <label class="form-label">Service Tag</label>
                                                    </div>
                                                </div>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="PatrimonioAntigo" >
                                                        <label class="form-label">Patrimônio</label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <input type="checkbox" id="monitorAntigo" name="monitorAntigo">
                                                    <label for="monitorAntigo">MONITOR</label>
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                        <input type="text" class="form-control" name="monitorAntigoMarca" >
                                                        <label class="form-label">MARCA</label>
                                                    </div>
                                                </div>
                                                <input type="checkbox" id="mouseAntigo" name="mouseAntigo">
                                                <label for="mouseAntigo">MOUSE</label>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="mouseAntigoMarca" >
                                                        <label class="form-label">MARCA</label>
                                                    </div>
                                                </div>
                                                <input type="checkbox" id="tecladoAntigo" name="tecladoAntigo">
                                                <label for="tecladoAntigo">TECLADO</label>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="tecladoAntigoMarca" >
                                                        <label class="form-label">MARCA</label>
                                                    </div>
                                                </div>
                                                <input type="checkbox" id="carregadorAntigo" name="carregadorAntigo">
                                                <label for="carregadorAntigo">Carregador/Fonte de energia</label>
                                                <div class="form-group form-float">
                                                    <div class="form-line">
                                                        <input type="text" class="form-control" name="carregadorAntigo" >
                                                        <label class="form-label">MARCA</label>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="card">
                                    <div class="header">
                                        <h2>EQUIPAMENTO NOVO</h2>
                                     </div>
                                    <div class="body">
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Modelo" >
                                                <label class="form-label">Modelo</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="ServiceTag" >
                                                <label class="form-label">Service Tag</label>
                                            </div>
                                        </div>
                                        <div class="form-group form-float">
                                            <div class="form-line">
                                                <input type="text" class="form-control" name="Patrimonio" >
                                                <label class="form-label">Patrimônio</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="checkbox" id="monitordell" name="monitordell">
                                            <label for="monitordell">MONITOR DELL</label>
                                            <div class="form-group form-float">
                                        </div>
                                        <input type="checkbox" id="mousedell" name="mousedell">
                                        <label for="mousedell">MOUSE DELL</label>
                                        <div class="form-group form-float">
                                        </div>
                                        <input type="checkbox" id="tecladodell" name="tecladodell">
                                        <label for="tecladodell">TECLADO DELL</label>
                                        <div class="form-group form-float">    
                                        </div>
                                        <input type="checkbox" id="carregadordell" name="carregadordell">
                                        <label for="carregadordell">Carregador/Fonte de energia DELL</label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="header">
                                <h2>RESPONSÁVEL PELO EQUIPAMENTO</h2>
                            </div>
                            <div class="body">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                            <input type="text" class="form-control" name="Responsavel" >
                                            <label class="form-label">Nome Completo</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" class="form-control" name="Email" >
                                            <label class="form-label">Email</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="Departamento" >
                                            <label class="form-label">Departamento</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="Localidade" >
                                            <label class="form-label">Localidade</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="Data" >
                                            <label class="form-label">Data</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Backup">Backup</label>
                                        <input type="radio" name="Backup" id="Sim" Value="Sim" class="with-gap">
                                        <label for="Sim">Sim</label>
                                        <input type="radio" name="Backup" id="Não" Value="Não" class="with-gap">
                                        <label for="Não" class="m-l-20">Nâo</label>
                                    </div>
                                    <p>
                                        <b>Termo</b> 
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="file" name="arquivo" >
                                        </div>
                                    </div>    
                                </div>
                             </div>
                        </div>
                        <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="Cadastrar" value="Cadastrar">
                </form>
            </div>
                        </div>
                    </div>
                </div>
            <div class="row clearfix">
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

    <!-- Bootstrap Colorpicker Js -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>

    <!-- Dropzone Plugin Js -->
    <script src="../../plugins/dropzone/dropzone.js"></script>

    <!-- Input Mask Plugin Js -->
    <script src="../../plugins/jquery-inputmask/jquery.inputmask.bundle.js"></script>

    <!-- Multi Select Plugin Js -->
    <script src="../../plugins/multi-select/js/jquery.multi-select.js"></script>

    <!-- Jquery Spinner Plugin Js -->
    <script src="../../plugins/jquery-spinner/js/jquery.spinner.js"></script>

    <!-- Bootstrap Tags Input Plugin Js -->
    <script src="../../plugins/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>

    <!-- noUISlider Plugin Js -->
    <script src="../../plugins/nouislider/nouislider.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="../../plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="../../js/admin.js"></script>
    <script src="../../js/pages/forms/advanced-form-elements.js"></script>

    <!-- Demo Js -->
    <script src="../../js/demo.js"></script>
</body>

</html>
