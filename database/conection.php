<?php
//CONEXIÓN A LA BASE DE DATOS
$hostname_db = "localhost";
$database_db = "sanber";
$username_db = "root";
$password_db = "root";
//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db);

include('view/funciones.php');
 ?>
