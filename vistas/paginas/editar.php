<?php

if (isset($_GET["id"])) {
    $item = "id";
    $valor = $_GET["id"];
    $usuario = ControladorFormularios::ctrSeleccionarRegistros($item, $valor);
    // echo '<pre>'; print_r($usuario); echo '</pre>'; 
}

?>

<div class="d-flex justify-content-center p-3">
    <form method="POST">
        <div class="text-center">
            <div class="form-group mb-3">
                <!-- <label for="nombre">Nombre:</label> -->
                <div class="input-group">
                    <div class="input-group-prepend  d-flex flex-row">
                        <span class="input-group-text ">
                            <i class="fas fa-user"></i> </span>
                        <input type="text" class="form-control" name="actualizarNombre" value="<?php echo $usuario["nombre"]; ?>" id="nombre" placeholder="Escriba su nombre">
                    </div>
                </div>
            </div>

            <div class="form-group">
                <!-- <label for="email">Email:</label> -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend  d-flex flex-row">
                        <span class="input-group-text">
                            <i class="fa-solid fa-envelope"></i>
                        </span>
                        <input type="email" class="form-control" name="actualizarEmail" id="email" value="<?php echo $usuario["email"]; ?>"  placeholder="Escriba su email">
                    </div>
                </div>
            </div>


            <div class="form-group">
                <!-- <label for="pwd">Contraseña:</label> -->
                <div class="input-group mb-3">
                    <div class="input-group-prepend  d-flex flex-row">
                        <span class="input-group-text">
                            <i class="fa-solid fa-key"></i>
                        </span>
                        <input type="password" class="form-control" name="actualizarPassword" id="pwd" placeholder="Escriba su contraseña">
                        <input type="hidden" name="passwordActual" value="<?php echo $usuario["password"]; ?>">
                        <input type="hidden" name="idUsuario" value="<?php echo $usuario["Id"]; ?>">
                    </div>
                </div>
            </div>

            <?php
            $actualizar = new ControladorFormularios();
            $actualizar->ctrActualizarRegistro();
            ?>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            
            
        </div>
    </form>

</div>