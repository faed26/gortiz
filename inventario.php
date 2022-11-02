<?php ?>
<?php require('./navbar.php'); ?>
<?php
    session_start();
    $usuarios=$_SESSION['usuario'];
    if(!isset($usuarios)){
        header("location:session.php");
    }else{
        echo"<center><h1>Hola $usuarios</h1></center>";
        echo"<center><button type='submit' class='btn btn-danger'><a href='logout.php'>Salir</a></button></center>";
    }
?>

<html lang="es">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.2.1/css/fixedHeader.bootstrap5.min.css">

  <title>Mercancia Registrada</title>
</head>

</header>

    <hr class="bg-info">

    <center>
        <h1>Mercancia Registrada</h1>
    </center>

    <hr class="bg-info">
    <center>
        <button type='submit' class='btn btn-info'><a href="registro.php">Registro de productos</a></button>
    </center>
    <hr class="bg-info">

    <?php include('./conexion.php'); ?>

<?php include('./conexion.php'); ?>

    <div class="scroll_horizontal">
        <table id="example" class="table table-dark table-bordered display responsivegene" style="width:100%">
            <thead>
                <tr>
                    <th class="text-center">Nombre</th>
                    <th class="text-center">descripcion</th>
                    <th class="text-center">categoria</th>
                    <th class="text-center">precio_compra</th>
                    <th class="text-center">Precio_venta</th>
                    <th class="text-center">Cantidad</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            
            <?php include('conexion.php');
                $sql = "SELECT * FROM productos";
                $consulta = mysqli_query($conexion, $sql);
                while ($r = mysqli_fetch_assoc($consulta)) {
                    echo"<tr>
                        <td class='text-center'>"  .$r['nombre']."</td>
                        <td class='text-center'>" . $r['descripcion']. "</td>
                        <td class='text-center'>" . $r['categoria'] ."</td>
                        <td class='text-center'>" . $r['precio_compra'] ."</td>
                        <td class='text-center'>" . $r['precio_venta'] ."</td>
                        <td class='text-center'> ". $r['cantidad']. "</td>
                        <td class='text-center'>
                            <a href=\"editar_registro.php?id=" .$r['nombre']."\">
                                <button class='btn btn-primary'>
                                    <i class='fas fa-edit'></i>
                                </button>
                            </a>     
                                
                            <a href=\"eliminar_registro.php?id=". $r['nombre']."\">
                                <button class='btn btn-danger'>
                                    <i class='fas fa-trash'></i>
                                </button>
                            </a>
                        </td>
                    </tr>";
                }
            ?>
        </table>
    </div>
    <hr class="bg-warning">

<?php include('./conexion.php'); ?>