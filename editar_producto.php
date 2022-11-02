<?php
include "conexion.php";
$id_producto=$_POST['id_producto'];
$titulo=$_POST['titulo'];
$nombre=$_POST['nombre'];
$desc_brev=$_POST['desc_brev'];
$titulo_imagen = $_FILES['titulo_imagen']['name'];
$tipo= $_FILES['titulo_imagen']['type'];
$tamano = $_FILES['titulo_imagen']['size'];
$imagen_eliminar=$_POST['mostrar'];
$agregar="";

if( $titulo_imagen!= null ){
    $agregar=",titulo_imagen='".$titulo_imagen."'";

if (!((strpos($tipo, "gif") || strpos($tipo, "png")) && ($tamano < 5000000))) {
    print"<script>alert(\"El tamaño de la imagen o el tipo no son validos.\");
    window.location='admin.php';</script>";
}else{
    unlink("img/productos/".$imagen_eliminar);
 move_uploaded_file($_FILES['titulo_imagen']['tmp_name'],  "img/productos/$titulo_imagen");  
}
}
$accion="UPDATE mercancia SET titulo='$titulo',nombre='$nombre', desc_brev='$desc_brev' $agregar WHERE id_producto='$id_producto'";

$consulta=mysqli_query($conexion,$accion);

if($consulta!=null){
    print"<script>alert(\"Edición Exitosa.\");
    window.location='admin.php';</script>";


}else{

    print"<script>alert(\"No se pudo editar.\");
    window.location='admin.php';</script>";
} 

?> 