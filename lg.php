<?php
  
  include('db.php');
    if (isset($_POST['lg'])){

    $Us = $_POST['us'];
    $Pw = $_POST['pw'];
    
    $query = "SELECT * FROM user WHERE Us = '$Us' and Pw = '$Pw'";
    $result = $cx->query($query);
    $cx = NULL;
    $row = NULL;
    foreach($result as $row){
      
    }

    if ($row['Us'] != ""){
        $_SESSION['user'] = 'cec3b60800f0c822ad6f519478e21091';
        
        //defino la sesi贸n que demuestra que el usuario est谩 autorizado
        $_SESSION["autentificado"]= "SI";
        //defino la fecha y hora de inicio de sesi贸n en formato aaaa-mm-dd hh:mm:ss
        $_SESSION["ultimoAcceso"]= date("Y-n-j H:i:s");


         //valido usuario para activar boton solves
       if ($row['Us'] == "jefferfonseca" || $row['Us'] == "xavier")
        {
          $_SESSION["solves"]= "Ok";
        }else 
          $_SESSION["solves"]= "hide";
        header("location: admin-master.php");
        }
        else 
        {
          $_SESSION['message'] = '*La combinaci&oacuten de usuario y contrase&ntildea no son validos';
          header("location: login.php");
        }
  }


 ?>
