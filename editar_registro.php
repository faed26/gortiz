<?php ?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <?php require('./navbar.php'); ?>

    <div class="container">
        <div class="row">
            <div class="container">
                <center>
                    <h1>Ediar Registro</h1>
                </center>
                <hr class="bg-info">

                <?php
                    $nombre=$_GET['nombre']; 

                    require 'conexion.php';

                    $buscar=mysqli_query($conexion, "SELECT * FROM productos WHERE nombre='$nombre'");
                    $filas = mysqli_fetch_array($buscar);

                    $nombre = $filas['nombre'];
                    $descripcion = $filas['descripcion'];
                    $categoria = $filas['categoria'];
                    $precio_compra = $filas['precio_compra'];
                    $precio_venta = $filas['precio_venta'];
                    $cantidad = $filas['cantidad'];
                ?>
<br>
                <form action="update_registro.php" method="post">
                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Nombre</label>
                                <div class='input-group date'>
                                    <input type="text" name="nombre" id='nombre' class="form-control" placeholder="Nombre" required value="<?php echo $nombre; ?>">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Descripcion</label>
                                <div class='input-group date'>
                                    <input type="text" name="descripcion" id='descripcion' class="form-control" placeholder="Descripcion" required value="<?php echo $descripcion; ?>">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Categoria</label>
                                <div class='input-group date'>
                                    <input type="text" name="categoria" id='categoria' class="form-control" placeholder="Categoria" required value="<?php echo $categoria; ?>">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Precio Compra</label>
                                <div class='input-group date'>
                                    <input type="text" name="precio_compra" id='precio_compra' class="form-control" placeholder="Precio de Compra" required value="<?php echo $precio_compra; ?>">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Precio Venta</label>
                                <div class='input-group date'>
                                    <input type="text" name="precio_venta" id='precio_venta' class="form-control" placeholder="Precio Venta" required value="<?php echo $precio_venta; ?>">
                                </div>
                            </div>
                            <br>
                        </div>

                        <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <label>Cantidad </label>
                                <div class='input-group date'>
                                    <input type="text" name="cantidad" id='cantidad' class="form-control" placeholder="cantidad" required value="<?php echo $cantidad; ?>">
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-info">EDITAR REGISTRO</button>
                </form>
            </div>
        </div>
        <hr class="bg-info">
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>