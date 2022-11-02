<?php ?>

<body>
    <hr class="bg-info">

    <div class="container">
        <div class="row">
            <div class="card-group">
                <div class="card">
                    <img src="./img/balatas.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Balatas</a></h5>
                        <p class="card-text">
                            Las balatas -o pastillas de frenos como también se le conoce-, son un elemento del sistema de freno de disco que, al ser presionadas por el pistón en la pinza de frenos, entra en contacto de fricción con el disco de frenado unido a la rueda.
                            Es una pasta con una base metálica que entra en fricción con el disco durante la frenada.
                            Se pueden encontrar en distintos tamaños y son fabricadas en diferentes materiales, pero siempre tendrán la misma función, generar fricción entre ellas y el disco de freno, para frenar o detener el automóvil.
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Balatas</small>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/flotadorchevy.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">FLOTADOR P/BOMBA GASOLINA GM CHEVY 96-02/TIGRA 1999 L4 1.6L</a></h5>
                        <p class="card-text">
                            APLICACIONES
                            1994-2003 Chevy 4 Cilindros 1.4 Litros
                            1996-2009 Chevy 4 Cilindros 1.6 Litros
                            1998-2003 Chevy Monza 4 Cilindros 1.6 Litros
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">FLOTADOR BOMBA GASOLINA GM CHEVY 96-02</small>
                    </div>
                </div>

                <div class="card">
                    <img src="./img/frenos.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><a href="#">Frenos de disco</a></h5>
                        <p class="card-text">
                            Los frenos de disco son la opción más común y eficaz actualmente, aparecen en los deportivos de más altas prestaciones y hasta en autos urbanos, que si bien podrían llevar tambores atrás, también ofrecen discos como una mejora para asegurar siempre un frenado más efectivo y con riesgo de fatiga reducido.
                            Funcionan de una forma similar a los de tambor, en este caso el disco de frenado gira a la par del eje y para reducir la velocidad es presionado por las** pinzas de frenado**, mismas que cuentan con pastillas que son las que hacen contacto con el disco. Esta acción de presión de las pinzas y pastillas sobre el disco, produce fricción y resistencia, lo que conlleva a la perdida de velocidad
                        </p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Frenos de Disco</small>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <?php

    include('conexion.php');
    $sql = "SELECT * FROM mercancia";
    $consulta = mysqli_query($conexion, $sql);


    while ($r = mysqli_fetch_assoc($consulta)) {
        echo "
    <div align='justify' class='container'>
    <div class='card mb-3'>
      <img src='img/productos/" . $r['titulo_imagen'] . "' height='350'class='card-img-top' alt='" . $r['titulo_imagen'] . "'>
      <div class='card-body'>
        <h5 class='card-title'><a href='productos.php?codigo=" . $r['nombre'] . "'>" . $r['titulo'] . "</a></h5>
        <p class='card-text'>" . $r['desc_brev'] . "</p>
      </div>
      <div class='card-footer'>
          <small class='text-muted'>Taller Mecánico </small>
        </div>
    </div>
  </div>
   
            ";
    }
    ?>
    <hr class="bg-info">
</body>