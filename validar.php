<?php
$usuarios = $_POST['usuario'];
$contraseña = $_POST['contraseña'];
session_start();
$_SESSION['usuario'] = $usuarios;
include('conexion.php');
$consulta = "SELECT * FROM usuarios WHERE usuario='$usuarios' and contraseña='$contraseña'";
$resultado = mysqli_query($conexion, $consulta);

$filas = mysqli_fetch_array($resultado);

if($filas['id_usuario']==0){
    $_SESSION['usuarios']==$usuarios;
    header("location:session.php");

}else if ($filas['id_usuario'] == 1) {
    $_SESSION['usuario'] == $usuarios;
    header("location:admin.php");

} elseif ($filas['id_usuario'] == 2) {
    $_SESSION['usuario'] == $usuarios;
    header("location:inventario.php");
} else {

?>
    <?php
    include("session.php");
    ?>
    <h1>Error Datos</h1>
<?php
}


mysqli_free_result($resultado);
mysqli_close($conexion);
