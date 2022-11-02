<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/login.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Inicio de sesión</title>
</head>
<body>
<?php require ('./navbar.php'); ?>
    <div class="modal-dialog  text-center">
        <div class="col-sm-11 cuadro">
            <div class="modal-content">
                <form action="validar.php" method="POST" onsubmit="return validarlogin();">
                    <h1>"Sistema de Login de Taller Mecánico"</h1>
                    <div class="form-group">
                        <p><strong> Usuario </strong><input class="form-control text-center" type="text"
                                placeholder="Ingrese su de usuario" id="usuario" name="usuario" required minlength="6" maxlength="10" required></p>
                        <p><strong>Contraseña </strong><input class="form-control text-center" type="password"
                                placeholder="Ingrese su contraseña" id="contraseña" name="contraseña" required minlength="4" maxlength="10" required></p>
                                
                                  
                        <input class="btn btn-primary " type="submit" value="Iniciar Sesión">
                       
                    </div>
                    
                </form>
                
            </div>
        </div>
    </div>
    
    
    <script type="text/javascript" src="./js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>

</body>



</html>