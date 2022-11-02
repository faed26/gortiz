<?php ?>
<?php
session_start();
$usuario = $_SESSION['usuario'];
if (!isset($usuario)) {
    header("location:session.php");
} else {

    echo "<a id='salir' class='btn btn-danger' style='float: right;' href='logout.php'>Cerrar Sesión</a>";
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
   
    <title>Administrador de mercancia</title>

</head>
<header>

    <?php require('./navbar.php'); ?>
    <?php


    $usuario = $_SESSION['usuario'];
    if (!isset($usuario)) {
        header("location:index.php");
    } else {
        echo "<h1 class='text-center'>Hola $usuario Bienvenido</h1>";
    }


    ?>
</header>

<body>
    <hr class="bg-warning">
    <div class="container-fluid col-md-12 col-sm-12">
        <div class="modal-content">
            <div class="modal-dialog  text-center">


                <div class="modal-content">
                    <form action="agregar_mercancia.php" method="POST" enctype="multipart/form-data" onsubmit="return validaradmin();">
                        <h1>"Sistema mercancia del taller mecánico."</h1>
                        <div class="form-group">
                            <p><strong>Nombre de la mercancia</strong><input class="form-control text-center" type="text" placeholder="Ingrese el nombre de la mercancia" id="titulo" name="titulo" required></p>
                            <p><strong>Descripción breve</strong><input class="form-control text-center" type="text" placeholder="Ingrese una breve descripción" id="desc_brev" name="desc_brev" required></p>
                            <p><strong>Imagen de la nota, que no exceda los 5MB</strong><input class="form-control text-center" type="file" placeholder="Ingrese la imagen de la mercancia" id="titulo_imagen" name="titulo_imagen" required></p>
                            <p><strong>Nota </strong><textarea class="form-control text-center" type="text" placeholder="Ingrese el nombre de la mercancia" id="nombre" name="nombre" required> </textarea></p>
                            <input class="btn btn-success" type="submit" value="Subir mercancia">
                        </div>
                    </form>
                </div>

            </div>
            <h1>"Despliegue de información de la mercancia"</h1>
            <div class="dt-responsive table-responsive">
                <table class="table table-striped table-dark" class='col-md-12'>
                    <thead>
                        <tr>
                            <th style="width: 10%;">Título</th>
                            <th style="width: 15%;">Describcion breve</th>
                            <th style="width: 35%;">Nota</th>
                            <th style="width: 30%; ">Imagen</th>
                            <th style="width: 10%;">Acciónes</th>

                        </tr>
                    </thead>

                    <?php

                    include('conexion.php');
                    $sql = "SELECT * FROM mercancia";
                    $consulta = mysqli_query($conexion, $sql);


                    while ($r = mysqli_fetch_assoc($consulta)) {
                        echo "<tr align='justify'>
                               <td>" . $r['titulo'] . "</td>
                               <td>" . $r['desc_brev'] . "</td>
                               <td>" . $r['nombre'] . "</td>
                               <td><img style='height: 250px; ' src='img/productos/" . $r['titulo_imagen'] . "' height='350'class='card-img-top' alt='nota'></td>
                               
                               <td><a href=\"eliminar_producto.php?id_producto=" . $r['id_producto'] . "\"><class='text-center'><button class='btn btn-danger'><i class='fas fa-trash'></i></button> </a>
                               
                               <a href=\"modificar_producto.php?id_producto=" . $r['id_producto'] . "\"><class='text-center'><button class='btn btn-primary'><i class='fas fa-edit'></i></button> </td>
              
                             </tr>";
                    }
                    ?>
                </table>
                <hr class="bg-warning">


                <script type="text/javascript" src="js/main.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


</body>

</html>