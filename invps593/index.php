<?php
session_start();
// if (!isset($_SESSION["login"])) {
//     header("location: login.php");
// }

$user = $_SESSION["login"]["user"];
//var_dump($user);


require_once "init.php";
include_once 'MVC/Model/ConfiguracionDaoImp.php';
$logo = "resource/ConfigIMG/logo.png";
$datos = ConfiguracionDaoImp::get()[0];
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>INVPS593</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="resource/Plantilla/bootstrap/dist/css/bootstrap.min.css">
        <!-- Message -->
        <link href="resource/bootstrap/message/jquery-confirm.min.css" rel="stylesheet" type="text/css"/>

        <!-- Bootstrap Select -->
        <link rel="stylesheet" href="resource/bootstrap/bootstrap-select/bootstrap-select.min.css">
        <!-- Bootstrap Table -->
        <link rel="stylesheet" href="resource/table/bootstrap-table.min.css">
        <link rel="stylesheet" href="resource/table/bootstrap-table-reorder-rows.css">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="resource/Plantilla/font-awesome/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="resource/Plantilla/Ionicons/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="resource/Plantilla/dist/css/AdminLTE.css">
        <link rel="stylesheet" href="resource/dist/css/style.css">
        <!--        <link rel="stylesheet" href="resource/dist/css/file.css">-->
        <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
              page. However, you can choose any other skin. Make sure you
              apply the skin class to the body tag so the changes take effect. -->
        <link rel="stylesheet" href="resource/Plantilla/dist/css/skins/skin-blue.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Google Font -->
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <!-- REQUIRED JS SCRIPTS -->

        <!-- jQuery 3 -->
        <script src="resource/Plantilla/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap 3.3.7 -->
        <script src="resource/Plantilla/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- Message -->
        <script src="resource/bootstrap/message/jquery-confirm.min.js"></script>
        <!-- BootStrapTable -->
        <script src="resource/table/bootstrap-table.min.js"></script>
        <script src="resource/table/locale/bootstrap-table-es-ES.min.js"></script>
        <script src="resource/table/jquery.tablednd.js"></script>
        <script src="resource/table/bootstrap-table-reorder-rows.js"></script>

        <!-- BootStrap Select -->
        <script src="resource/bootstrap/bootstrap-select/bootstrap-select.min.js"></script>
        <!-- AdminLTE App -->
        <script src="resource/Plantilla/dist/js/adminlte.js"></script>
        <!-- Moment -->
        <script src="resource/Moment/moment.js"></script>
        <script src="resource/Moment/moment-with-locales.js"></script>
        <!-- Input Mask -->
        <script src="resource/dist/js/jquery.inputmask.bundle.min.js"></script>
        <script src="resource/dist/js/html2canvas.min.js"></script>
        <!--<script src="resource/dist/js/canvas2image.js"></script>-->
        <script src="resource/dist/js/style.js"></script>
        <script src="resource/dist/js/loads.js"></script>



    </head>
    <body class="hold-transition fixed skin-blue sidebar-mini">
        <div class="wrapper">

            <!-- Main Header -->
            <header class="main-header">

                <!-- Logo -->
                <a href="index.php" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>V</b>PS</span>
                    <!-- logo for regular state and mobile devices -->
                    <!--<span class="logo-lg"><b>Brau</b>Pe<b>Comp</b></span>-->
                    <!-- <h1>
                      <a href="index.php">
                        <span>
                          <i class="fa fa-server"></i>"VPS593"</span>".COM"
                      </a>
                    </h1> -->
                    <span class="logo-lg"><?php echo $datos["nombre"]; ?></span>
                </a>

                <!-- Header Navbar -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <!-- The user image in the navbar-->

                                    <i class="fa fa-user-circle-o" style="font-size:36px"></i>

                                    <!-- <img src="<?php echo $logo; ?>" class="user-image" alt="User Image"> -->
                                    <!--<img src="resource/Plantilla/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">-->
                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                                    <span class="hidden-xs"><?php echo $user["u"]; ?></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">

                                      <!-- logo circulo imagen cerrrar sesion -->

                                      <i class="fa fa-user-circle-o" style="font-size:36px"></i>

                                        <!-- <img src="<?php echo $logo; ?>" class="img-circle" alt="User Image"> -->

                                        <p>
                                            <?php echo $user["u"] . ' - ' . (($user["idrol"] == "1") ? "Admin" : "User"); ?>
                                            <!--<small>Member since Nov. 2012</small>-->
                                        </p>
                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <!--<div class="pull-left">
                                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>-->
                                        <div class="pull-right">
                                            <a href="#" id="cerrarSesion" class="btn btn-default btn-flat">Cerrar Sesión</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">

                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar">

                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel">
                        <div class="pull-left image">
                            <!-- <img src="<?php echo $logo; ?>" width="160"  alt="User Image"> -->
                        </div>
                        <div class="pull-left info">
                            <p> <?php echo $user["u"]; ?> </p>
                            <!-- Status -->
                            <!--<a href="#"><i class="fa fa-circle text-success"></i> Online</a>-->
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">Navegación Principal</li>
                        <!-- Optionally, you can add icons to the links -->

                        <?php if($user["idrol"] == "1"){ ?>


                            <a href="MVC/View/App/usuario.php">
                                <i class="fa fa-user-circle"></i> <span>Usuarios</span>
                            </a>
                        </li>

                        <li >
                            <a href="MVC/View/Configure/configure.php">
                                <i class="fa fa-gears"></i> <span>Configuración</span>
                            </a>
                        </li>
                        <?php } ?>

                        <li>
                          <a href="#">
                            <i class='fa fa-home'></i> <span>Inicio</span></a>
                        </li>

                        <li >
                            <a href="MVC/View/Proform/proforma.php">
                                <i class="fa fa-file-archive-o"></i> <span>Proformas</span>
                            </a>
                        </li>

                        <li class="treeview">
                          <a href="#"><i class='fa fa-usd'></i> <span>Vender</span> <i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li >
                                <a href="MVC/View/VenderProd/venderprod.php">
                                    <i class="fa fa-product-hunt"></i> <span>Productos</span>
                                </a>
                            </li>
                            <li><a href="MVC/View/Servicio/servicio.php">
                              <i class="	fa fa-gears"></i><span>Servicios</span>
                                </a>
                          </li>

                          </ul>
                        </li>

                        <li><a href="#"><i class='fa fa-cube'></i> <span>Caja</span></a></li>
                        <li><a href="#"><i class='fa fa-shopping-cart'></i> <span>Ventas</span></a></li>
                        <li><a href="MVC/View/Product/producto.php"><i class='fa fa-glass'></i> <span>Productos</span></a></li>



                        <li class="treeview">
                          <a href="#"><i class='fa fa-area-chart'></i> <span>Inventario</span> <i class="fa fa-angle-left pull-right"></i></a>
                          <ul class="treeview-menu">
                            <li >
                                <a href="MVC/View/Product/producto.php">
                                    <i class=""></i> <span>Productos</span>
                                </a>
                            </li>
                            <li><a href="#">Inventario</a></li>
                            <li><a href="#">Abastecer</a></li>
                            <li><a href="#">Abastecimientos</a></li>
                          </ul>
                        </li>

                        <li >



                        <li class="treeview">
              <a href="#"><i class='fa fa-database'></i> <span>Catalogos</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="#"><i class='fa fa-glass'></i> <span>Productos</span> <i class="fa fa-angle-left pull-right"></i></a>
                  <ul class="treeview-menu">
                    <li >
                        <a href="MVC/View/NewProduct/newproduct.php">
                            <i class=""></i> <span>Agregar Nuevo</span>
                        </a>
                    </li>
                    <li><a href="MVC/View/Abastecer/abastecer.php">Abastecer</a></li>

                  </ul>
                </li>

                <li >
                <li >
                    <a href="MVC/View/Client/cliente.php">
                        <i class="fa fa-users"></i> <span>Clientes</span>
                    </a>
                </li>

                <li><a href="MVC/View/Proveedores/proveedor.php">
                  <i class='fa fa-truck'></i>Proveedores</a></li>
              <li><a href="MVC/View/Product/producto.php"><i class='fa fa-glass'></i> <span>Productos</span></a></li>
                <li >
                    <a href="MVC/View/Catalog/garantia.php">
                        <i class="fa fa-handshake-o"></i> <span>Garantia</span>
                    </a>
                </li>
                <li >
                    <a href="MVC/View/Categoria/categoria.php">
                        <i class="fa fa-handshake-o"></i> <span>Categoria</span>
                    </a>
                </li>
              </ul>
            </li>
            <li class="treeview">
              <a href="#"><i class='fa fa-area-chart'></i> <span>Inventario</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li >
                    <a href="MVC/View/Product/producto.php">
                        <i class=""></i> <span>Productos</span>
                    </a>
                </li>
                <li><a href="#">Inventario</a></li>
                <li><a href="#">Abastecer</a></li>
                <li><a href="#">Abastecimientos</a></li>
              </ul>
            </li>
            <li class="treeview">
              <a href="MVC/View/Reporte/reporte.php"><i class='fa fa-file-text-o'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu"><li><a href="#">Inventario</a></li>
                  <li><a href="#">Ventas</a></li>
                </ul>
            </li>

            <li class="treeview">
              <a href="MVC/View/Reporte/reporte.php"><i class='fa fa-file-text-o'></i> <span>Configuración</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="#">Nuevo Proveedor</a></li>
                  <li><a href="#">Ventas</a></li>
                </ul>
            </li>

                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" id="containPages">

                <?php
                //include './MVC/View/Configure/configure.php';
                ?>
            </div>
            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                    UI Life
                </div>
                <!-- Default to the left -->
                <strong>Copyright &copy; 2018.</strong> All rights reserved.
            </footer>
        </div>
        <!-- ./wrapper -->



        <!-- Optionally, you can add Slimscroll and FastClick plugins.
             Both of these plugins are recommended to enhance the
             user experience. -->
    </body>
</html>
