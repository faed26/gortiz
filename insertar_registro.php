<?php

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria'];
$precio_compra=$_POST['precio_compra'];
$precio_venta=$_POST['precio_venta'];
$cantidad=$_POST['cantidad'];

include "conexion.php";

$accion="INSERT INTO productos (nombre, descripcion, categoria, precio_compra, precio_venta, cantidad)
VALUES ('$nombre', '$descripcion', '$categoria', '$precio_compra', '$precio_venta', '$cantidad')";
$consulta=mysqli_query($conexion,$accion);

if($consulta!=null){
    print("<script>alert(\"Agregado Exitosamente.\");
    window.location='inventario.php';</script>");


}else{

    print"<script>alert(\"No se pudo agregar.\");
    window.location='registro.php';</script>";
}
?>