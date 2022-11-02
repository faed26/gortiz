<?php

include "conexion.php"; 

$nombre = $_GET ['nombre'];

$sql="DELETE FROM productos WHERE nombre='$nombre'";
$consulta=mysqli_query($conexion,$sql);

if($consulta!=null){
    print"<script>alert(\"Eliminado Exitosamente.\");
    window.location='inventario.php';</script>";

}else{
    print"<script>alert(\"No se pudo eliminar.\");
    window.location='inventario.php';</script>";
}
?>