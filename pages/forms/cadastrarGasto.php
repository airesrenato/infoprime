<?php
    session_start();
    //require_once "../../metododos/seguranca.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Cadastrar Gasto</title>

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
    <!-- Page Loader 
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
     #END# Page Loader -->
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
               // include_once"../../footer.php";
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
                                Cadastrar Gasto <?php// echo $_SESSION['idordemServico']; ?>
                            </h2>
                        </div>
                        <div class="body">
                            <form method="post" action="../../metodos/insereGastos.php" enctype="multipart/form-data">
                                <div class="col-md-12">
                                    <p>
                                        <b>Categoria</b> 
                                    </p>
                                </div>
                                    <select class="form-control show-tick" name="Categoria" data-live-search="true">
                                        <?php
                                           // $query = "SELECT * FROM equipamento";
                                            //$resultado = $link->query($query) or die($link->error);
                                           // while($linha = $resultado->fetch_array()){
                                           //     echo "<option value='".$linha["idEquipamento"]."'> ".$linha["VC"]."</option>";
                                           // }
                                        ?>
                                        <option value='Alimentação'> Alimentação</option>
                                        <option value='Pedágio'> Pedágio</option>
                                        <option value='Combustível'> Combustível</option>
                                        <option value='Estacionamento'> Estacionamento</option>
                                        <option value='Passagem'> Passagem</option>
                                        <option value='Passagem Aérea'> Passagem Aérea</option>
                                        <option value='Aluguel de carro'> Aluguel de carro</option>
                                        <option value=''> Despesa</option>
                                    </select>
                                    
                                <div class="col-md-12">
                                    <p>
                                        <b>Data</b> 
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="DiaGasto" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>Fornecedor</b> 
                                    </p>    
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="texte" class="form-control date" name="Fornecedor" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>Departamento</b> 
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">    
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="Departamento" placeholder="Departamento" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>Compra</b> 
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="Compra" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>Valor</b> 
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="Valor" placeholder="Valor" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>OBS</b> 
                                    </p>
                                </div>
                                <div class="col-md-12">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" name="Obs" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <p>
                                        <b>Nota</b> 
                                    </p>
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="file" name="arquivo" required>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                    $idordemServiço = $_SESSION['idordemServico'];
                                ?>
                                <input type="hidden" name="idordemServico" value="<?php echo $idordemServiço; ?>">
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="Cadastrar" value="Cadastrar">
                            </form>
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
<?php
 

?>
