<?php

$hostname_db = "localhost";
$username_db = "root";
$password_db = "";
$database_db = "gortiz";

$conexion = mysqli_connect($hostname_db, $username_db, $password_db, $database_db)
    or die("No pudo realizar conexión");

?>
<!-- <H1>Conectado</H1> -->