<?php

include "conexion.php";

$id_producto=$_GET['id_producto'];
$buscar=mysqli_query($conexion,"SELECT * FROM mercancia WHERE id_producto=$id_producto");
$fila=mysqli_fetch_array($buscar);
$consulta=$fila['titulo_imagen'];
unlink("img/productos/".$consulta);
$sql="DELETE FROM mercancia WHERE id_producto='$id_producto'";
$consulta=mysqli_query($conexion,$sql);

if($consulta!=null){
    print"<script>alert(\"Eliminado Exitosamente.\");
    window.location='admin.php';</script>";


}else{

    print"<script>alert(\"No se pudo eliminar.\");
    window.location='admin.php';</script>";
}
?>