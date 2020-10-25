<?php
  //Conexión Local
$host='localhost';
$usuariodb='root';
$passwdb='';
$nombredb='tovarodb';

$query = 'SELECT * FROM user';
$coneccionDB = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);
$result = $coneccionDB->query($query);
foreach($result as $row){
   print_r($row);
}
$coneccionDB = NULL;



//Conexion remota
// $host='host17.latinoamericahosting.com:3306';
// $usuariodb='tovaroed_dx';
// $passwdb='1049629422SantiF';
// $nombredb='tovaroed_dx';

// $query = 'SELECT * FROM user';
// $coneccionDB = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);
// $result = $coneccionDB->query($query);
// foreach($result as $row){
//    print_r($row);
// }
// $coneccionDB = NULL;
?>