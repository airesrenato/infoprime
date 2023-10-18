<?php
    session_start();
    //require_once "../../seguranca.php";
    require_once "../../metodos/conexao.php";
    
    $query="SELECT * FROM ordemServico where idordemServico = ". $_GET['idordemServico']."";
    $resultado=$link->query($query) or die ($link->error);
    $linha = $resultado->fetch_array();

    if($linha['idLider'] != $_SESSION['idUsuario'] && $_SESSION['Acesso']!="Gestor"){
        header('Location:../erp/pages/examples/404.html');
    }

    $_SESSION['idordemServico'] = $_GET['idordemServico'];

    
   
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
                <h2>Informações da OS</h2>
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
                                        <i class="material-icons">groups</i> Participantes
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#messages_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">face</i> Lider
                                    </a>
                                </li>
                                <li role="presentation">
                                    <a href="#settings_with_icon_title" data-toggle="tab">
                                        <i class="material-icons">settings</i> Gastos
                                    </a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">
                                    <b>Home Content</b>
                                    <p>
                                    <?php
                                        $query="SELECT * FROM ordemServico os inner join usuario u where os.idLider = u.idusuario  and  idordemServico = ". $_GET['idordemServico']."";
                                        $resultado=$link->query($query) or die ($link->error);
                                        while($linha = $resultado->fetch_array()){
                                            echo
                                                "<br> Descrição: ".$linha["Descricao"]."<br>
                                                
                                                <br> Solicitante: ".$linha["ContatoSolicitante"]."<br>
                                                <br> Empresa: ".$linha["Solicitante"]."<br>
                                               
                                                
                                            ";
                                        } 
                                    
                                    ?>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                                    <b>Colaboradores</b>
                                    <p>
                                    <?php

                                        



                                        
                                    $query="SELECT * FROM usuario u INNER JOIN usuario_has_ordemServico uos ON u.idUsuario = uos.idUsuario INNER JOIN ordemServico os on uos.idordemServico = os.idordemServico WHERE os.idordemServico = ". $_GET['idordemServico']."";
                                    $resultado=$link->query($query) or die ($link->error);
                                 
                                    $row_cnt = $resultado->num_rows;
                                    $_SESSION['idordemServico'] = $_GET['idordemServico'];
                                    
                                        if($row_cnt == 0){
                                            echo "<br> Defina os colaboradores que irão participar da OS ".$_SESSION['idordemServico']."
                                            <a href='http://".$host."/infoprime/erp/pages/forms/atrelarColaboradores.php?idordemServico=".$_GET["idordemServico"]."'>Detalhes</a>";
                                        }

                                        while($linha = $resultado->fetch_array()){
                                            echo
                                                "<br> Colaborador: <b>".$linha["Nome"]."</b><br>
                                                
                                               
                                            ";
                                        }
                                    
                                    ?>
                                    </p>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">
                                    <b>Lider</b>
                                    <p>
                                <div class="body">
                                    <div id="aniimated-thumbnials" class="list-unstyled row clearfix">
                                        <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                                        <?php


                                            $query="SELECT * FROM ordemServico WHERE idordemServico = ". $_GET['idordemServico']."";
                                            $resultado=$link->query($query) or die ($link->error);
                                            $linha = $resultado->fetch_array();

                                           if($linha['idUsuario']==$linha['idLider']){
                                            echo "<br> Defina o lider da OS ".$_SESSION['idordemServico']."
                                            <a href='http://".$host."/infoprime/erp/pages/forms/escolherLider.php?idordemServico=".$_GET["idordemServico"]."'>Aqui</a>";
                                           }else{
                                            
                                            $query="SELECT * FROM usuario u INNER JOIN ordemServico os ON u.idUsuario = os.idLider WHERE os.idordemServico = ". $_GET['idordemServico']."";
                                            $resultado=$link->query($query) or die ($link->error);
                                            $linha = $resultado->fetch_array();

                                             echo "<p>O líder definido para esta Ordem de Serviço é o colaborador <b> ".$linha['Nome']."</b></p>";
                                            //echo var_dump($linha);
                                           


                                           }

                                          //  $query="SELECT * FROM refeicao where idRefeicao = ". $_GET['idRefeicao']."";
                                          //  $resultado=$link->query($query) or die ($link->error);
                                          //  while($linha = $resultado->fetch_array()){
                                              //  echo
                                              //  "<img class='img-responsive thumbnail' src='../../images/notas/".$linha['NotaFiscal']."'>
                                              //   ";
                                          //  }
                                        ?>
                                </div>
                            </div>
                        </div>
                                    </p>
                    </div>
                                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                                    
                                    <p>
                                        <?php
                                        
                                        
                                        ?>
                                        <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                      
                                        <li><a href="http://localhost/infoprime/erp/pages/forms/cadastrarGasto.php">So</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        
                                        <th>Compra</th>
                                        <th>Observação</th>
                                        <th>Valor</th>
                                        <th>Nota</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                $query="SELECT * FROM gasto WHERE idordemServico = ".$_GET['idordemServico']."";
                                            $resultado=$link->query($query) or die ($link->error);
                                            while($linha = $resultado->fetch_array()){
                                                echo"  <tr>".
                                                    "<td>".$linha["Compra"]."</td>
                                                    <td>".$linha["Obs"]."</td>
                                                    
                                                    <td>".$linha["Valor"]."</td>
                                                   
                                                    <td><a href='http://localhost/infoprime/erp/images/notas/".$linha["Nota"]."'>Nota<a/></td>
                                                    
                                                </tr>";
                                            }
                                            ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Table -->
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
