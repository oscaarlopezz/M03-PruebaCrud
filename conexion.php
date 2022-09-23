<?php

require_once "config.php";

//"mysql:host=$servidor;dbname=nombreDeTuBaseDeDatos"
$servidor = "mysql:host=".SERVIDOR.";dbname=".BD;

try {
    $pdo = new PDO($servidor, USUARIO, PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES UTF8"));
    echo "<script>alert('CONEXION ESTABLECIDA CON EXITO :)')</script>";
}
catch(Exception $e){
    echo $e->getMessage();
    echo "<script>alert('ERROR ALGO A SALIDO MAL :(')</script>";
}