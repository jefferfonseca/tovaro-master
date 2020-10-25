  <?php
  $extension = pathinfo($_FILES['archivo']['name'], PATHINFO_EXTENSION);
  if ($extension!=""){
  if($_FILES['archivo']['name']!=""){
  $destino = $_POST['rutadir'].str_replace("#", "No.", $_POST['nombre']. '_' .$_POST['apellido']. '_' .$_POST['taller']. '.' . $extension);
  copy($_FILES['archivo']['tmp_name'], $destino);
  echo "<script> alert('Archivo subido correctamente.'); window.location='".$_GET['u']."'; window.close();</script>";
  }
  else
  {
     echo "<script> alert('Se ha producido un error. Intentelo nuevamente'); window.location='".$_GET['u']."'; window.close();</script>";
  }
} else
  {
     echo "<script> alert('Se ha producido un error. Intentelo nuevamente'); window.location='".$_GET['u']."'; window.close();</script>";
  }
?>
