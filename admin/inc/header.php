<?php
require_once '../app/config.php';
//session_start();
//ob_start();

$usuarioController = new UsuarioController();

if ($usuarioController->isLoggedIn()) {
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
            <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
            <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

            <title>CENTRAL SOLUÇÕES</title>

            <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
            <meta name="viewport" content="width=device-width" />


            <!-- Bootstrap core CSS     -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

            <!-- Animation library for notifications   -->
            <link href="assets/css/animate.min.css" rel="stylesheet"/>

            <!--  Paper Dashboard core CSS    -->
            <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


            <!--  CSS for Demo Purpose, don't include it in your project     -->
            <link href="assets/css/demo.css" rel="stylesheet" />


            <!--  Fonts and icons     -->
            <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
            <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
            <link href="assets/css/themify-icons.css" rel="stylesheet">

        </head>
        <body>

            <div class="wrapper">
                <div class="sidebar" data-background-color="black" data-active-color="info">
                    <div class="sidebar-wrapper">
                        <div class="logo">
                            <a href="?pagina=dashboard" class="simple-text">
                                CENTRAL SOLUÇÕES
                            </a>
                        </div>

                        <ul class="nav">
                            <li class="active">
                                <a href="?pagina=dashboard">
                                    <i class="ti-panel"></i>
                                    <p>PAINEL ADMINISTRATIVO</p>
                                </a>
                            </li>
                            <li>
                                <a href="?pagina=user">
                                    <i class="ti-user"></i>
                                    <p>Perfil Usuário</p>
                                </a>
                            </li>

                            <li>
                                <a href="?pagina=categoria">
                                    <i class="ti-tag"></i>
                                    <p>Categoria</p>
                                </a>
                            </li>

                            <li>
                            <li>
                                <a href="?pagina=sub">
                                    <i class="ti-layers-alt"></i>
                                    <p>Subcategoria</p>
                                </a>
                            </li>                        

                            <li>
                                <a href="?pagina=pagina">
                                    <i class="ti-package"></i>
                                    <p>Páginas</p>
                                </a>
                            </li>
                            <li>
                                <a href="?pagina=slider">
                                    <i class="ti-image"></i>
                                    <p>Slider</p>
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>

                <?php
            } else {
                header('location: index.php');
            }
            ?>