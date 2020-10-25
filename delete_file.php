<!--<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script language="JavaScript" type="text/javascript">
    
    function checkAGE() {
        if (confirm("Desea entrar a esta página, presione ACEPTAR, si no presione CANCELAR"))
   --> <?php
        unlink($_GET['path']);
        echo "<script> alert('Archivo eliminado correctamente.'); window.location='".$_GET['u']."'; window.close();</script>";
    ?>

  <!--      alert('Archivo eliminado correctamente.'); 
        window.location=$_GET['u']; 
        window.close();
        else
            history.go(-1);
        return " "
    }
    document.writeln(checkAGE())

    
    </script>


</body>

</html>
-->