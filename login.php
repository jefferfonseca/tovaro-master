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
        display: flex;
        min-height: 100vh;
        flex-direction: column;
    }

    div #login {
        background: #00000020;
        border-radius: 20px;
        padding: 20px;
        margin-top: 10%;
    }

    #footer {
    width: auto;
    margin-top:2%;
    -webkit-box-sizing:border-box;
    -moz-box-sizing:border-box;
    box-sizing:border-box;
    background: #333;
}
    </style>
</head>
<?php include('db.php'); 
error_reporting(0);
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

                <!-- <a class="hide" id="logo"><img style="padding: 10px;" src="images/Escudo.png" alt="tovaro"
                            width=50px height=100%></a> -->
        </nav>
</header>

<div class="row container">
    <div class="col s12 m3"></div>

    <div class="col s12 m6">
        <form class="col s12 m12" id="login" action="lg.php" method="POST">
            <div class="row">
                <span class="red-text">
                    <?php 
                    echo $_SESSION['message'];
                    $_SESSION['message']="";
                    ?>
                </span>
                <div class="input-field col s12">
                    <input id="Usuario" type="text" name="us" class="validate white-text" autofocus required>
                    <label for="Usuario" class="white-text">Usuario</label>
                </div>

                <div class="input-field col s12">
                    <input id="password" type="password" name="pw" class="validate white-text" required>
                    <label for="password" class="white-text">Contraseña</label>
                </div>
            </div>
            <input type="submit" value="Ingresar" name="lg" class="btn ">
        </form>
    </div>
</div>

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
