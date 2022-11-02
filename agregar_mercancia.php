<?php
include "conexion.php";
$id_producto=$_POST['id_producto'];
$titulo=$_POST['titulo'];
$nombre=$_POST['nombre'];
$desc_brev=$_POST['desc_brev'];
$titulo_imagen=$_FILES['titulo_imagen']['name'];
$tamano=$_FILES['titulo_imagen']['size'];
$tipo=$_FILES['titulo_imagen']['type'];
if (!((strpos($tipo, "gif") || strpos($tipo, "png")) && ($tamano < 5000000))) {
    print"<script>alert(\"El tamaño de la imagen o el tipo no son validos.\");
    window.location='admin.php';</script>";
}else{
 move_uploaded_file($_FILES['titulo_imagen']['tmp_name'],  "img/productos/$titulo_imagen");  

$accion="INSERT INTO mercancia (id_producto,titulo,nombre,desc_brev,titulo_imagen)
VALUES ('$id_producto', '$titulo', '$nombre','$desc_brev','$titulo_imagen')";
$consulta=mysqli_query($conexion,$accion);

if($consulta!=null){
    print"<script>alert(\"Agregado Exitosamente.\");
    window.location='admin.php';</script>";


}else{

    print"<script>alert(\"No se pudo agregar.\");
    window.location='admin.php';</script>";
}
 
}