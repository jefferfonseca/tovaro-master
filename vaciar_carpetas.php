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

</head>

<body>
   
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
        $fullPath="";
            $path  = "css/IIperiodo/";

$dir = Array ( "00. GRADO TRANSICIÓN", "01. GRADO PRIMERO", "02. GRADO SEGUNDO", "03. GRADO TERCERO", "04. GRADO CUARTO", "05. GRADO QUINTO", "06. GRADO SEXTO", "07. GRADO SEPTIMO", "08. GRADO OCTAVO", "09. GRADO NOVENO", "10. GRADO DECIMO", "11. GRADO ONCE" ); 
$subdir = Array ("Transicion 1", "Transicion 2", "Transicion 3", "Primero 1", "Primero 2", "Segundo 1", "Segundo 2", "Segundo 3", "Tercero 1", "Tercero 2", "Cuarto 1", "Cuarto 2", "Quinto 1", "Quinto 2", "Quinto 3", "Sexto 1", "Sexto 2", "Sexto 3", "Sexto 4", "Septimo 1", "Septimo 2", "Septimo 3", "Octavo 1", "Octavo 2", "Octavo 3", "Noveno 1", "Noveno 2", "Noveno 3", "Decimo 1", "Decimo 2", "Decimo 3", "Once 1", "Once 2", "Once 3");
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
                         $code .= "<form action='procesar.php?u=admin-master.php' method='post' enctype='multipart/form-data'>";
                         $code .= "<input type='hidden' name='rutadir' value='$path4' />"; 
                         $code .= "<input type='file' name='archivo'/>";
                         $code .= "<input type='submit' value='Subir' class='btn'/>  </form>";
                         while ($e4 = readdir($sub_dir3)) {
                             if (is_file($path4 . $e4) && $e4 != "." && $e4 != "..") {
                                 echo $code;
                                 $code = "";
                                 $fullPath = $path4.$e4;
                                  unlink($fullPath);

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
//  function tildes_eñes($elemento){
//      $charsets = array(
//          "á",
//          "é",
//          "í",
//          "ó",
//          "ú",
//          "ñ",
//          "Á",
//          "É",
//          "Í",
//          "Ó",
//          "Ú",
//          "Ñ",
//          "#"
//      );
//      $result   = array(
//          "&aacute",
//          "&eacute",
//          "&iacute",
//          "&oacute",
//          "&uacute",
//          "&ntilde",
//          "&Aacute",
//          "&Eacute",
//          "&Iacute",
//          "&Oacute",
//          "&Uacute",
//          "&Ntilde",
//          "No. "
//      );
//  }
  
// ?>

    </section>

    <script language="JavaScript" type="text/javascript">
    function eliminar() {
        if (confirm('¿Seguro que desea eliminar el archivo?')) {
            <?php unlink($fullPath); ?>
            alert('Archivo Eliminado correctamente.');
            location.href = "";
        } 
    }
    </script>




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
