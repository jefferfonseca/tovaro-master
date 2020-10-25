<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Es el Sitio Web Oficial de la Institución Educativa Técnica Tomás Vásquez Rodríguez">
    <title>TOVARO</title>

    <link rel="stylesheet" href="css\header.css">
    <link rel="stylesheet" href="css\slider.css">
    <link rel="stylesheet" href="css\styles.css">

    <link rel="icon" href="images\Escudo.png" type="image/png" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

</head>

<body>
    <header>
        <!-- <div class="navbar-fixed">  Pega el menu a la parte de arriba -->
        <div class="navbar">
            <div class="row header">
                <div class="col s12 m1 l1 center"> <img src="images\Escudo.png" alt="tovaro" width=70px height=90px>
                </div>
                <div class="col s12 m10 l4 center">
                    <h5>Institución Educativa Técnica<br>Tomás Vásquez Rodríguez</h5>
                    <p>"Con pensamiento triunfador, buscamos la excelencia"</p>
                </div>
            </div>
            <nav class="blue-grey lighten-1" id="myHeader">
                <div class="nav-wrapper">
                    <a class="hide" id="logo"><img style="padding: 10px;" src="images/Escudo.png" alt="tovaro"
                            width=50px height=100%></a>

                    <a href="#" data-target="menu-responsive" class="sidenav-trigger right">
                        <i class="material-icons">menu</i>
                    </a>
                    <ul class="right hide-on-med-and-down">
                        <li class="<?php if($menu=="Inicio"){echo"active";}?>"><a href="index.php">Inicio</a></li>
                        <li class="<?php if($menu=="Nosotros"){echo"active";}?>"><a href="nosotros.php">Nosotros</a>
                        </li>
                        <li class="<?php if($menu=="TOVARO"){echo"active";}?>"><a href="tovaro-online.php">TOVARO
                                Online</a>
                        </li>
                        <li class="
                    <?php if($menu=="Especialidades"){echo"active";}?>"><a href="#" class="dropdown-trigger"
                                data-target="lista">
                                Especialidades
                                <i class="material-icons right">arrow_drop_down</i>
                            </a>
                        </li>
                        <li class="<?php if($menu=="Contacto"){echo"active";}?>"><a href="contacto.php">Contáctenos</a>
                        </li>
                    </ul>

                </div>
            </nav>

            <!-- Lista de especialidades -->
            <ul id="lista_responsive" class="dropdown-content blue-grey lighten-1">
                <li><a href="redes.php">Redes y sistemas</a></li>
                <li><a href="salud.php">Salud</a></li>
                <li><a href="turismo.php">Turismo</a></li>
            </ul>

            <ul id="lista" class="dropdown-content">
                <li><a href="redes.php"><span>Redes y sistemas</span></a></li>
                <li><a href="salud.php">Salud</a></li>
                <li><a href="turismo.php">Turismo</a></li>
            </ul>

            <ul class="sidenav" id="menu-responsive">
                <li class="<?php if($menu=="Inicio"){echo"active";}?>"><a href="index.php">Inicio</a></li>
                <li class="<?php if($menu=="Nosotros"){echo"active";}?>"><a href="nosotros.php">Nosotros</a></li>
                <li class="<?php if($menu=="TOVARO"){echo"active";}?>"><a href="tovaro-online.php">TOVARO Online</a>
                </li>
                <li class="<?php if($menu=="Especialidades"){echo"active";}?>"><a href="#" class="dropdown-trigger"
                        data-target="lista_responsive">
                        Especialidades
                        <i class="material-icons right">arrow_drop_down</i>
                    </a>
                </li>
                <li class="<?php if($menu=="Contacto"){echo"active";}?>"><a href="contacto.php">Contáctenos</a></li>
            </ul>
        </div>
    </header>

    
