<?php

session_start();

$cx = mysqli_connect(
    'localhost',//servidor
    'root',//Usuario del servidor
    '',//Pw del Us del servidor
    'php_mysql_crud'//db_name
);

?>