<?php

include 'conexion.php';

$nombre=$_POST['nombre'];
$descripcion=$_POST['descripcion'];
$categoria=$_POST['categoria'];
$precio_compra=$_POST['precio_compra'];
$precio_venta=$_POST['precio_venta'];
$cantidad=$_POST['cantidad'];

$accion = "UPDATE productos SET nombre='$nombre', descripcion='$descripcion', categoria='$categoria', precio_compra='$precio_compra', precio_venta='$precio_venta', cantidad='$cantidad' WHERE nombre ='$nombre '";

$consulta=mysqli_query($conexion,$accion);

if($consulta!=null){
    print"<script>alert(\"Edición Exitosamente.\");
    window.location='inventario.php';</script>";


}else{

    print"<script>alert(\"No se pudo editar.\");
    window.location='inventario.php';</script>";
}

?>