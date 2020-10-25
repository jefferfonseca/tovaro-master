<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Es el Sitio Web Oficial de la Institución Educativa Técnica Tomás Vásquez Rodríguez">
    <title>TOVARO</title>
    <link rel="icon" href="images\Escudo.png" type="image/png" />

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>







<div class="contain ">
    <div class="section container">
        <div class="row">
            <form class="col s12">
                <div class="row card-panel">

                    <div class="input-field col s12 m6">
                        <input type="text" id="dni" class="validate">
                        <label for="dni">No. Documento:</label>
                    </div>
                    <div class="input-field col s12 m6">
                        <input type="text" id="nombre" class="validate">
                        <label for="nombre">Nombres:</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input type="text" id="apellido" class="validate">
                        <label for="apellido">Apellidos:</label>
                    </div>

                    <div class="input-field col s12 m6">
                        <input type="text" id="Grado" class="validate">
                        <label for="Grado">Grado:</label>
                    </div>

                    <div class="input-field col s12 " id="contenido">
                        <input type="email" id="email">
                        <label for="email">E-mail:</label>
                    </div>

                    <button class="btn waves-effect waves-light" type="submit" name="action"> Enviar
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>




















<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Inicializa los JavaScript -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    M.AutoInit();

});
</script>

<script>
        //recorrer elementos de ancla donde ancla selecciona por la clase 
        function action(){
           var ancla= document.getElementsByClassName('contain');
               ancla[0].classList.toggle('hide');//toggle quita o pone la clase
        }
    </script>
</body>

</html>
