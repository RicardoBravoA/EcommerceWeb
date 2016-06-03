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

    <link href="js/advanced-datatable/css/demo_page.css" rel="stylesheet" />
    <link href="js/advanced-datatable/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="js/data-tables/DT_bootstrap.css" />

</head>

<body>

<section id="container" >

    <!--header start-->
    <header class="header fixed-top clearfix">

        <!--logo start-->
        <div class="brand">
            <a href="#" class="logo">
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
                            <div class="position-center ">
                                <div class="text-center">
                                    <a id="btnNew" class="btn btn-warning">
                                        Nuevo
                                    </a>
                                    <a id="btnSearch" class="btn btn-success">
                                        Buscar
                                    </a>
                                </div>

                            </div>
                        </div>
                    </section>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Búsqueda de Usuarios
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form class="form-inline" role="form">
                                    <input class="form-control" id="txtFilter"
                                           placeholder="Ingrese búsqueda">
                                    <button class="btn btn-primary" type="submit">Buscar</button>
                                    <button class="btn btn-default" type="button">Cancelar</button>
                                </form>
                            </div>
                        </div>
                    </section>

                </div>
            </div>

            <div class="row hidden" id="divRegister">

                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Registro de Usuarios
                            <span class="tools pull-right">
                                <a class="fa fa-chevron-down" href="javascript:;"></a>
                            </span>
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
            <div class="row">
                <div class="col-sm-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Editable Table
                        </header>
                        <div class="panel-body">
                            <div class="adv-table editable-table ">
                                <div class="clearfix">
                                    <div class="btn-group">
                                        <button id="editable-sample_new" class="btn btn-primary">
                                            Add New <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-right">
                                            <li><a href="#">Print</a></li>
                                            <li><a href="#">Save as PDF</a></li>
                                            <li><a href="#">Export to Excel</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="space15"></div>
                                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                                    <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Points</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="">
                                        <td>Jonathan</td>
                                        <td>Smith</td>
                                        <td>3455</td>
                                        <td class="center">Lorem ipsume</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Mojela</td>
                                        <td>Firebox</td>
                                        <td>567</td>
                                        <td class="center">new user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Akuman </td>
                                        <td> Dareon</td>
                                        <td>987</td>
                                        <td class="center">ipsume dolor</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Theme</td>
                                        <td>Bucket</td>
                                        <td>342</td>
                                        <td class="center">Good Org</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhone</td>
                                        <td> Doe</td>
                                        <td>345</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Margarita</td>
                                        <td>Diar</td>
                                        <td>456</td>
                                        <td class="center">goolsd</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhon Doe</td>
                                        <td>Jhon Doe </td>
                                        <td>1234</td>
                                        <td class="center"> user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Helena</td>
                                        <td>Fox</td>
                                        <td>456</td>
                                        <td class="center"> Admin</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Aishmen</td>
                                        <td> Samuel</td>
                                        <td>435</td>
                                        <td class="center">super Admin</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>dream</td>
                                        <td>Land</td>
                                        <td>562</td>
                                        <td class="center">normal user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>babson</td>
                                        <td> milan</td>
                                        <td>567</td>
                                        <td class="center">nothing</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Waren</td>
                                        <td>gufet</td>
                                        <td>622</td>
                                        <td class="center">author</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhone</td>
                                        <td> Doe</td>
                                        <td>345</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Margarita</td>
                                        <td>Diar</td>
                                        <td>456</td>
                                        <td class="center">goolsd</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhon Doe</td>
                                        <td>Jhon Doe </td>
                                        <td>1234</td>
                                        <td class="center"> user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Helena</td>
                                        <td>Fox</td>
                                        <td>456</td>
                                        <td class="center"> Admin</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Aishmen</td>
                                        <td> Samuel</td>
                                        <td>435</td>
                                        <td class="center">super Admin</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>dream</td>
                                        <td>Land</td>
                                        <td>562</td>
                                        <td class="center">normal user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>babson</td>
                                        <td> milan</td>
                                        <td>567</td>
                                        <td class="center">nothing</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Waren</td>
                                        <td>gufet</td>
                                        <td>622</td>
                                        <td class="center">author</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhone</td>
                                        <td> Doe</td>
                                        <td>345</td>
                                        <td class="center">super user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Margarita</td>
                                        <td>Diar</td>
                                        <td>456</td>
                                        <td class="center">goolsd</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Jhon Doe</td>
                                        <td>Jhon Doe </td>
                                        <td>1234</td>
                                        <td class="center"> user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Helena</td>
                                        <td>Fox</td>
                                        <td>456</td>
                                        <td class="center"> Admin</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Aishmen</td>
                                        <td> Samuel</td>
                                        <td>435</td>
                                        <td class="center">super Admin</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>dream</td>
                                        <td>Land</td>
                                        <td>562</td>
                                        <td class="center">normal user</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>babson</td>
                                        <td> milan</td>
                                        <td>567</td>
                                        <td class="center">nothing</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    <tr class="">
                                        <td>Waren</td>
                                        <td>gufet</td>
                                        <td>622</td>
                                        <td class="center">author</td>
                                        <td><a class="edit" href="javascript:;">Edit</a></td>
                                        <td><a class="delete" href="javascript:;">Delete</a></td>
                                    </tr>
                                    </tbody>
                                </table>
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
<script src="js/test.js"></script>
<script src="js/validation-init.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="js/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="js/data-tables/DT_bootstrap.js"></script>



<script src="js/jquery-migrate.js"></script>


<!--script for this page only-->
<script src="js/table-editable.js"></script>

<!-- END JAVASCRIPTS -->
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>








</body>

</html>

