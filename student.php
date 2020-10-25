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
    $path  = "";
    $periodo = "IIperiodo-ing/";
    if (isset($_POST['periodo'])){
        $periodo = $_POST['periodo'];
      }
      else 
        $periodo = "Segundo Periodo";

        switch ($periodo) {
        case "Primer Periodo":
            $path  = "Iperiodo-ing/";
            break;
        case "Segundo  Periodo":
            $path  = "IIperiodo-ing/";
            break;
        case "Tercer  Periodo":
            $path  = "IIIperiodo-ing/";
            break;
        case "Cuarto  Periodo":
            $path  = "IVperiodo/";
            break;
        default:
            $path  = "IIperiodo-ing/";
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

                    <h4 href="#" class="center-align"><?php echo $periodo ?></h4>
                    <!-- <a class="hide" id="logo"><img style="padding: 10px;" src="images/Escudo.png" alt="tovaro"
                            width=50px height=100%></a> -->
            </nav>
    </header>
    <section>
        <form action="" method="POST">

            <input type="submit" class="btn" name="periodo" value="Primer Periodo">
            <input type="submit" class="btn" name="periodo" value="Segundo Periodo">
            <input type="submit" class="btn hide" name="periodo" value="Tercer Periodo">
            <input type="submit" class="btn hide" name="periodo" value="Cuarto Periodo">

        </form>

        <?php
$dir = Array ("07. GRADO SEPTIMO", "08. GRADO OCTAVO", "10. GRADO DECIMO", "11. GRADO ONCE"); 
$subdir = Array ("Septimo 1", "Septimo 2", "Septimo 3", "Octavo 2", "Decimo 1", "Once 1");
$long = count($dir);
$code  = null;
$code .= "<ul  class='collapsible'>"; //lista anidada grados 

foreach ($dir as $e1) {
$dir   = opendir($path);

        $code .= "<li><div class='collapsible-header'>
        <i class='material-icons'>sort</i>" . substr("$e1", 4) . "</div> <div class='collapsible-body'>";
        $code .= "<ul  class='collapsible'>"; //lista anidada curso
        
        $path2   = $path . $e1 . "/";
        $sub_dir = opendir($path2);


        foreach ($subdir as $e2) {
        
        
            if (is_dir($path2 . $e2) && $e2 != "." && $e2 != "..") {
                $code .= "<li><div class='collapsible-header'><i class='material-icons'>sort</i>$e2</div> 
                 <div class='collapsible-body'>";
                $code .= "<ul  class='collapsible'>"; //lista anidada materia
                
                $path3    = $path2 . $e2 . "/";
                $sub_dir2 = opendir($path3);
                while ($e3 = readdir($sub_dir2)) {
                     if (is_dir($path3 . $e3) && $e3 != "." && $e3 != "..") {
                         $code .= "<li><div class='collapsible-header'><i class='material-icons'>sort</i>$e3</div> <div class='collapsible-body'>";
                         $code .= "<ul>"; //lista anidada
                        
                         $path4    = $path3 . $e3 . "/";
                         $sub_dir3 = opendir($path4);
                         $code .= "<form action='procesar_student.php?u=student.php' method='post' enctype='multipart/form-data'>";
                         $code .= "<input type='hidden' name='rutadir' value='$path4' />"; 
                         $code .= "<div class='row'><div class='input-field col s12 m4'>
                         <input type='text' id='apellido' name='apellido' class='validate'required>
                         <label for='apellido'>Primer Apellido:</label></div>";
                         $code .= "<div class='input-field col s12 m4'>
                         <input type='text' id='nombre' name='nombre'class='validate' required>
                         <label for='nombre'>Primer Nombre:</label></div>";
                         
                         $code .= "<div class='input-field col s12 m4'>
                         <input type='text' id='taller' name='taller' class='validate'>
                         <label for='taller'>Actividad 1</label></div></div>";

                         $code .= "<input type='file' name='archivo'/>";
                         $code .= "<input type='submit' value='Subir' class='btn'/>  </form>";
                         while ($e4 = readdir($sub_dir3)) {
                             if (is_file($path4 . $e4) && $e4 != "." && $e4 != "..") {
                                 echo $code;
                                 $code = "";

                                 $code .= " <li> <div class='col s5'><a><i class='material-icons'>cloud_download</i> $e4</a></div></li>";
                             }
                         }
                         $code .= "</ul></div></li>";
                     }
                 }
                $code .= "</ul></div></li>";
            }
        }
        $code .= "</ul></div></li>";
}
echo $code .= "</ul>";

$code = "";
//corrige el error de charsets
// function tildes_eñes($elemento)
// {
//     $charsets = array(
//         "á",
//         "é",
//         "í",
//         "ó",
//         "ú",
//         "ñ",
//         "Á",
//         "É",
//         "Í",
//         "Ó",
//         "Ú",
//         "Ñ",
//         "#"
//     );
//     $result   = array(
//         "&aacute",
//         "&eacute",
//         "&iacute",
//         "&oacute",
//         "&uacute",
//         "&ntilde",
//         "&Aacute",
//         "&Eacute",
//         "&Iacute",
//         "&Oacute",
//         "&Uacute",
//         "&Ntilde",
//         "No. "
//     );
// }
   
?>

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
    </script>
    <footer class="page-footer blue-grey darken-3">
        <div class="container">
            <div class="row ">

                <!-- Escudo del colegio -->
                <div class="col s12 m4">
                    <br>
                </div>

                <!-- Redes Sociales -->
                <div class="col s12 m4 center">
                    <a href="https://www.facebook.com/tovaropa" target="_blank"><img src="./images/redes/fb.png"
                            style="border-radius: 50%; width:50px; height:50px;" alt="@tovaropa"></a>
                </div>

                <!-- Contacto -->
                <div class="col s12 m4">
                    <span>
                        <h5><b>Diseñada y desarrollada por: Ing. Jeferson Fonseca Soto.</b></h5>
                    </span>
                </div>
            </div>
        </div>
        <div class="col s12 blue-grey darken-1">
            <div class="footer-copyrigh center">

            </div>
        </div>
    </footer>

</body>

</html>
