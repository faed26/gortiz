<?php require('./navbar.php'); ?>


<div class="container">
    <h1>Registra los nuevos productos</h1>
        <form action="insertar_registro.php" method="post">
            <div class="row">
                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Nombre</label>
                        <div class='input-group date'>
                            <input type="text" name="nombre" id='nombre' class="form-control" placeholder="Nombre" required >
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Descripción</label>
                        <div class='input-group date'>
                            <input type="text" name="descripcion" id='descripcion' class="form-control" placeholder="Descripción" required >
                        </div>
                    </div>
                    <br>
                </div>

                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                    <div class="form-group">
                        <label>Categorias</label>
                        <div class='input-group date'>
                            <input type="text" name="categoria" id='categoria' class="form-control" placeholder="Categoria" required >
                        </div>
                    </div>
                    <br>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Precio de Compra</label>
                            <div class='input-group date'>
                                <input type="text" name="precio_compra" id='precio_compra' class="form-control" placeholder="Precio de Compra" required >
                            </div>
                        </div>
                    <br>
                </div>

                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Precio Venta</label>
                            <div class='input-group date'>
                                <input type="text" name="precio_venta" id='precio_venta' class="form-control" placeholder="Precio Venta" required >
                            </div>
                        </div>
                    <br>
                </div>

                <div class="col-xl-4 col-lg-3 col-mb-3 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <label>Cantidad</label>
                            <div class='input-group date'>
                                <input type="text" name="cantidad" id='cantidad' class="form-control" placeholder="Cantidad" required >
                            </div>
                        </div>
                    <br>
                </div>
            </div>
            <button type="submit" class="btn btn-info">GUARDAR</button>
        </form>
    </div>