<div class="d-flex justify-content-center p-3">
    <form method="POST">
        <h3 class="text-center">Registro</h3>
        <div class="text-center">

            <div class="form-group">
                <label for="email">Correo Electronico:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend  d-flex flex-row">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input required type="email" class="form-control" id="email" name="ingresoEmail" placeholder="Ingrese su email">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <label for="pwd">Contraseña:</label>
                <div class="input-group mb-3">
                    <div class="input-group-prepend  d-flex flex-row">
                        <span class="input-group-text">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input required type="password" class="form-control" id="pwd" name="ingresoPassword" placeholder="Ingrese su contraseña">
                    </div>
                </div>
            </div>

            <?php
            // // creamos el objeto de php e instanciamos metodo NO estatico
            // $registro = new controladorFormulario();
            // $registro -> ctrRegistro();

            //creamos el objeto de php e instanciamos metodo estatico

            $ingreso = new ControladorFormularios();
            $ingreso->ctrIngreso();

            ?>

            <button type="submit" class="btn btn-primary">Ingresar</button>
        </div>
    </form>

</div>