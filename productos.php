<?php require('./navbar.php'); ?>

<?php
$c = $_GET['codigo'];
include('conexion.php');
$sql = "SELECT * FROM productos WHERE nombre=$c";
$consulta = mysqli_query($conexion, $sql);
$r = mysqli_fetch_assoc($consulta);
?>

<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <title><?php echo ($r['nombre']); ?></title>
</head>
<header>

    <div align="justify" class='container'>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb pink lighten-4">
                <li class="breadcrumb-item"><a class="black-text" href="index.php">Principal</a></li>
                <li class="breadcrumb-item active"><?php echo ($r['titulo']); ?></li>
            </ol>
        </nav>
        <hr class="bg-warning">
        <div class="card ">

            <div class="card-body">
                <img src="img/notas/<?php echo ($r['titulo_imagen']); ?>" height="650px" class="card-img-top" alt="<?php echo ($r['titulo_imagen']); ?>">
                <hr class="bg-warning">
                <h5 class="card-title"><a href="#"><?php echo ($r['nombre']); ?></a></h5>
                <p class="card-text"><?php echo ($r['productos']); ?></p>
                <p class="card-text"><small class="text-muted"></small></p>
            </div>
        </div>
        <hr class="bg-warning">
    </div>
</header>