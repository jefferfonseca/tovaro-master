<?php
  
$host='host17.latinoamericahosting.com:3306';
$usuariodb='tovaroed_dx';
$passwdb='57da6ab743e2b9dad850ea8a82fd1e71';
$nombredb='tovaroed_dx';

$query = 'SELECT * FROM user';
$coneccionDB = new PDO('mysql:host=localhost;dbname='.$nombredb, $usuariodb, $passwdb);
$result = $coneccionDB->query($query);
foreach($result as $row){
   print_r($row);
}
$coneccionDB = NULL;
 ?>
