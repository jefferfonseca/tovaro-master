  <?php
 
  $ruta = Array ('r1', 'r2', 'r3', 'r4', 'r5', 'r6', 'r7', 'r8', 'r9', 'r10', 'r11'); 
  
  $archivo = Array ('f1', 'f1', 'f1', 'f2', 'f3', 'f4', 'f5', 'f6', 'f7', 'f8', 'f9');
  
  $i = 0;

  while($i <= 10){
    
    // saca los datos del array
    $r = $ruta[$i];
    $f = $archivo[$i];
    
    //valida que exista un archivo para subir
    if($_FILES[$f]['name']!=""){
        //arma la ruta a la cual se va a subir el archivo
        $destino = $_POST[$r].str_replace("#", "No.", $_FILES[$f]['name']);
        //Copia el archivo en cuestion
        copy($_FILES[$f]['tmp_name'], $destino);
        //crea un alert para indicar que se subio correctamente
        //echo "<script> alert('Archivo subido correctamente.". $destino . "');</script>";
      }
    
      //autoincremental para sacar los datos del array
      $i++;
  }
  
  echo "<script> alert('Archivo subido correctamente.'); window.location='".$_GET['u']."'; window.close();</script>";

?>

