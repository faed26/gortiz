<?php
$id_producto = $_GET['id_producto'];
require 'conexion.php';
$buscar = mysqli_query($conexion, "SELECT * FROM mercancia WHERE id_producto=$id_producto");
$fila = mysqli_fetch_array($buscar);
$titulo = $fila['titulo'];
$nombre = $fila['nombre'];
$desc_brev = $fila['desc_brev'];
$titulo_imagen = $fila['titulo_imagen'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Editar mercancia</title>

</head>
<?php

session_start();
$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    header("location:session.html");
} else {
    echo "<a id='salir' class='btn btn-danger' style='float: right;' href='logout.php'>Cerrar Sesión</a>";
}

?>
<header>
    
    <?php require('./navbar.php'); ?>

</header>



<html lang="es">
</header>
<div class="container">
<h1>Editar Mercancia</h1>
</div>   
    <hr class="bg-warning">
    
    <br>

    
    <div class="container">
    <form action="editar_producto.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <input type="hidden" name="id_producto"value="<?php echo $id_producto;?>">
                        <label>Titulo de la mercancia</label>
                        <div class='input-group date' >
                        <input type="text" class="form-control" required name="titulo" value="<?php echo $titulo;?>">
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                    <label>Descripción breve de la mercancia</label>
                        <div class='input-group date' >
                        <input type="text" name="desc_brev" class="form-control" required value="<?php echo $desc_brev;?>">
                        </div>
                    </div>
                    <br>
                </div>
                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                
                    <table border="0" cellpadding="0" cellSpacing="0" >
                        <tr>
                            <td><label>Imagen: </label></td>
                        </tr>
                        <tr>
                            <td>
                             <input class="form-control" type="text" size="42" value="<?php echo $titulo_imagen;?>" name="mostrar" readonly>
                            <input class="form-control" type="file"  id="titulo_imagen" name="titulo_imagen" >
                         </td> 
                        </tr>
                    </table>
                        
                        </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-mb-12 col-sm-12 col-xs-12">
                <div class="form-group ">
                    <label>nombre: </label>
                        
                        <textarea  type="text" class="form-control "  rows="8" name="nombre" value="<?php echo $nombre;?>" ><?php echo $nombre;?></textarea>
                        </div>
                    </div>
                   
                   
                    <br>
                </div>
            </div>
   
            <input  class="btn btn-primary form-control" type="submit" value="Guardar">
            </div>
        </form>
        
    </div>
</div>