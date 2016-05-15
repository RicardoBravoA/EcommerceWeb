<?php
/**
 * Created by PhpStorm.
 * User: Ricardo Bravo
 * Date: 14/05/16
 * Time: 10:36 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Ricardo Bravo">
    <link rel="shortcut icon" href="images/favicon.html">

    <title>Ecommerce</title>

    <link href="bs3/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <script src="js/ie8-responsive-file-warning.js"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
</head>

<body>

<section id="container" >

    <!--header start-->
    <header class="header fixed-top clearfix">

        <!--logo start-->
        <div class="brand">
            <a href="index.php" class="logo">
                <img src="images/ic_logo.png">
            </a>
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars"></div>
            </div>
        </div>
        <!--logo end-->

        <div class="top-nav clearfix">

            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="&nbsp;B&uacute;squeda">
                </li>

                <!-- user menu start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <img alt="" src="images/avatar1_small.jpg">
                        <span class="username">Usuario</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="#"><i class=" fa fa-suitcase"></i>Perfil</a></li>
                        <li><a href="#"><i class="fa fa-cog"></i> Ajustes</a></li>
                        <li><a href="#"><i class="fa fa-key"></i> Salir</a></li>
                    </ul>
                </li>
                <!-- user menu end-->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
    <!--header end-->


    <!-- menu start-->
    <aside>
        <div id="sidebar" class="nav-collapse">

            <!-- sidebar menu start-->
            <div class="leftside-navigation">
                <ul class="sidebar-menu" id="nav-accordion">

                    <li>
                        <a href="user.php"  class="active">
                            <i class="fa fa-user"></i>
                            <span>Usuario</span>
                        </a>
                    </li>

                    <li>
                        <a href="product.php">
                            <i class="fa fa-book"></i>
                            <span>Producto</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- sidebar menu end-->
        </div>
    </aside>
    <!-- menu end-->


    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <!-- page start-->

            <!-- form start-->
            <div class="row">

                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Mantenimiento de Usuarios
                        </header>
                        <div class="panel-body">
                            <div class=" form">
                                <form class="cmxform form-horizontal " id="commentForm" method="get" action="#">
                                    <div class="form-group ">
                                        <label for="name" class="control-label col-lg-3">Nombres</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="name" name="name"
                                                   minlength="3" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="lastname" class="control-label col-lg-3">Apellido Paterno</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="lastname" name="lastname"
                                                   minlength="3" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="maidenname" class="control-label col-lg-3">Apellido Materno</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="maidenname" name="maidenname"
                                                   minlength="3" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="user" class="control-label col-lg-3">Usuario</label>
                                        <div class="col-lg-6">
                                            <input class=" form-control" id="user" name="user"
                                                   minlength="3" type="text" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="password" class="control-label col-lg-3">Password</label>
                                        <div class="col-lg-6">
                                            <input class="form-control " id="password"
                                                   type="password" name="password" required />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-lg-offset-3 col-lg-6">
                                            <button class="btn btn-primary" type="submit">Guardar</button>
                                            <button class="btn btn-default" type="button">Cancelar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </section>
                </div>

            </div>
            <!-- form end-->

            <!-- page end-->
        </section>
    </section>
    <!--main content end-->

</section>

<script src="js/jquery.js"></script>
<script src="bs3/js/bootstrap.min.js"></script>
<script src="js/jquery.scrollTo.min.js"></script>
<script src="js/jQuery-slimScroll-1.3.0/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script src="js/scripts.js"></script>
<script src="js/validation-init.js"></script>

</body>

</html>

