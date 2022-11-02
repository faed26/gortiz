<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Inicio de sesión</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <?php require('./navbar.html'); ?>
  <div class="modal-dialog  text-center">
    <div class="col-sm-11 cuadro">
      <div class="modal-content">
        <form action="validar.php" method="POST" onsubmit="return validarlogin();">
          <h1>"Sistema de Login."</h1>
          <div class="form-group">
            <p><strong> Usuario </strong><input class="form-control text-center" type="text" placeholder="Ingrese su de usuario" id="usuario" name="usuario" required></p>
            <p><strong>Contraseña </strong><input class="form-control text-center" type="password" placeholder="Ingrese su contraseña" id="contraseña" name="contraseña" required></p>
            <input class="btn btn-primary " type="submit" value="Iniciar Sesión">
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>