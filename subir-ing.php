<!DOCTYPE html>

<html lang="es">



<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="Sitio Web Oficial de la Institución Educativa Técnica Tomás Vásquez Rodríguez">

    <title>TOVARO</title>



    <link rel="stylesheet" href="header.css">



    <link rel="icon" href="images\Escudo.png" type="image/png" />



    <!--Import Google Icon Font-->

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



    <!-- Compiled and minified CSS -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <style>

    body {

        background: #1565c0;

    }

    </style>

</head>



<body>



<?php 

session_start();
    
if (isset($_SESSION['periodo'])){
    $_SESSION['periodo'] = $periodo = (isset($_POST['periodo']) ? $_POST['periodo'] : $_SESSION['periodo']);
}else 
$_SESSION['periodo'] = $periodo = "Periodo III";

if (isset($_SESSION['ciclo'])){
    $_SESSION['ciclo'] = $ciclo = (isset($_POST['ciclo']) ? $_POST['ciclo'] : $_SESSION['ciclo']);
}else 
$_SESSION['ciclo'] = $ciclo = "Ciclo II";

//valida que en el primer periodo solo ingrese a ciclo III
if ($_SESSION['periodo'] == "Periodo I"){
    if ($_SESSION['ciclo'] != "Ciclo III"){
        $_SESSION['ciclo'] = $ciclo = "Ciclo III";
        echo '<script type="text/javascript">alert("No existe información para mostrar sobre el Periodo y Ciclo especificado.")</script>';
    }
}

//Impreme valor de la variable de sesión
//echo '<script type="text/javascript">alert("C= ' . $_SESSION['ciclo'] . '")</script>';


    switch ($periodo) {

    case "Periodo I":

    $path = "Iperiodo";

    break;

    case "Periodo II":

    $path = "IIperiodo";

    break;

    case "Periodo III":

    $path = "IIIperiodo";

    break;

    case "Periodo IV":

    $path = "IVperiodo";

    break;

    default:

    $path = "IIIperiodo";

    }

    

    switch ($ciclo) {

    case "Ciclo I":

    $path .= "CI/";

    break;

    case "Ciclo II":

    $path .= "CII/";

    break;

    case "Ciclo III":

    $path .= "CIII/";

    break;

     

    default:

    $path .= "CI/";

    }

    ?>

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

                    <h4 href="#" class="center-align"><?php echo $periodo . ' - ' . $ciclo ?></h4>

                    <!-- <a class="hide" id="logo"><img style="padding: 10px;" src="images/Escudo.png" alt="tovaro"

                            width=50px height=100%></a> -->
            </nav>

    </header>

    <section>

        <form action="" method="POST">
                <input type="submit" class="btn" name="periodo" value="Periodo I">
                <input type="submit" class="btn" name="periodo" value="Periodo II">
                <input type="submit" class="btn" name="periodo" value="Periodo III">
                <input type="submit" class="btn" name="periodo" value="Periodo IV">
        </form>

        <form action="" method="POST">
            <br>
            <?php  
            //valor para oculta o mostrar el ciclo I y II en I Periodo
            $stateI = "";
            //valor para oculta o mostrar el ciclo III en III y IV Periodo
            $stateIII = "";

            //Oculta o muestra el ciclo I y II en I Periodo
            if ($_SESSION['periodo'] == "Periodo I" ){
                $stateI = "hide";
            }
            //Oculta o muestra el ciclo III en III y IV Periodo

            if ($_SESSION['periodo'] == "Periodo III"  || $_SESSION['periodo'] == "Periodo IV"){
                $stateIII = "hide";
            }
            ?>

            <input type="submit" class="btn <?php echo $stateI?>" name="ciclo" value="Ciclo I">
            <input type="submit" class="btn <?php echo $stateI?>" name="ciclo" value="Ciclo II">
            <input type="submit" class="btn <?php echo $stateIII?>" name="ciclo" value="Ciclo III">
        </form>

        <form action='procesar-ing.php?u=admin-master.php' method='post' enctype='multipart/form-data' class="container">

            <h5 class="white-text">Geometría Septimo</h5>
            <input type='hidden' name='r1' value='<?php echo $path?>/07. GRADO SEPTIMO/Septimo 1/Geometría/'/>
            <input type='hidden' name='r2' value='<?php echo $path?>/07. GRADO SEPTIMO/Septimo 2/Geometría/'/>
            <input type='hidden' name='r3' value='<?php echo $path?>/07. GRADO SEPTIMO/Septimo 3/Geometría/'/>
            <input type='file' name='f1'/>

            <h5 class="white-text">Etíca Septimo</h5>
            <input type='hidden' name='r4' value='<?php echo $path?>/07. GRADO SEPTIMO/Septimo 3/Ética y Valores/'/>
            <input type='file' name='f2'/>

            <h5 class="white-text">Etíca Octavo</h5>
            <input type='hidden' name='r5' value='<?php echo $path?>/08. GRADO OCTAVO/Octavo 2/Ética y Valores/'/>
            <input type='file' name='f3'/>

            <h5 class="white-text">PdI Octavo</h5>
            <input type='hidden' name='r6' value='<?php echo $path?>/08. GRADO OCTAVO/Octavo 2/Proyecto de Investigación/'/>
            <input type='file' name='f4'/>

            <h5 class="white-text">TIC de Ambiente y Aprendizaje</h5>
            <input type='hidden' name='r7' value='<?php echo $path?>/10. GRADO DECIMO\Decimo 1\Tics de Ambiente y Aprendizaje/'/>
            <input type='file' name='f5'/>

            <h5 class="white-text">Instalación y Configuración del Sistema Operativo</h5>
            <input type='hidden' name='r8' value='<?php echo $path?>/10. GRADO DECIMO\Decimo 1\Instalación y Configuración del Sistema Operativo/'/>
            <input type='file' name='f6'/>

            <h5 class="white-text">Electrónica</h5>
            <input type='hidden' name='r9' value='<?php echo $path?>/11. GRADO ONCE\Once 1\Electrónica/'/>
            <input type='file' name='f7'/>

            <h5 class="white-text">Infraestructura, Diseño e Instrumentación de Redes LAN</h5>
            <input type='hidden' name='r10' value='<?php echo $path?>/11. GRADO ONCE\Once 1\Infraestructura, Diseño e Instrumentación de Redes LAN/'/>
            <input type='file' name='f8'/>

            <h5 class="white-text">Competencias Investigativas y Diseño de Proyectos</h5>
            <input type='hidden' name='r11' value='<?php echo $path?>/11. GRADO ONCE\Once 1\Competencias Investigativas y Diseño de Proyectos/'/>
            <input type='file' name='f9'/>
            <br>
            <input type='submit' value='Subir' class='btn'/>  
        </form>

    </section>


    <!-- Compiled and minified JavaScript -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- Inicializa los JavaScript -->

    <script>

    document.addEventListener('DOMContentLoaded', function() {

        M.AutoInit();

    });

    //js fixed header

    window.onscroll = function() {

        myFunction()

    };



    var header = document.getElementById("myHeader");

    var logo = document.getElementById("logo");

    var sticky = header.offsetTop;


    function myFunction() {

        if (window.pageYOffset > sticky) {

            header.classList.add("sticky");

            logo.classList.remove("hide");

        } else {

            header.classList.remove("sticky");

            logo.classList.add("hide");

        }

    }

    document.addEventListener('DOMContentLoaded', function() {

        var elems = document.querySelectorAll('.modal');

        var instances = M.Modal.init(elems, options);

    });

    </script>

     <footer class="page-footer blue-grey darken-3 center" id="footer">

          <div class="container">

            <div class="row">

              <div class="col l6 s12">

                <h5 class="white-text">Diseñada y desarrollada por: Ing. Jeferson Fonseca Soto.</h5>

              </div>

              <div class="col l4 offset-l2 s12">

                <a href="https://www.facebook.com/tovaropa" target="_blank"><img src="./images/redes/fb.png"

                        style="border-radius: 50%; width:50px; height:50px;" alt="@tovaropa"></a>

              </div>

            </div>

          </div>

          <div class="footer-copyright center">

            <div class="container">

            © 2020 Copyright

            </div>

          </div>

        </footer>

</body>

</html>

