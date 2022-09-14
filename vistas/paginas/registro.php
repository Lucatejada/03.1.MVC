<div class="d-flex justify-content-center p-3">

<form method="POST">

<h3 class="text-center">Registro</h3>
<div class="text-center" > 
    <div class="form-group mb-3">
        <label for="nombre">Nombre:</label>
        <div class="input-group">
            <div class="input-group-prepend  d-flex flex-row">
                <span class="input-group-text "> 
                    <i class="fas fa-user"></i> </span>
                <input type="text" class="form-control" id="nombre" name="regisNombre" placeholder="Ingrese su nombre">
            </div>
        </div>
    </div>

    <div class="form-group">
        <label for="email">Email:</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend  d-flex flex-row">
                <span class="input-group-text">
                    <i class="fa-solid fa-envelope"></i> 
                </span>
                <input type="email" class="form-control" id="email" name="regisEmail" placeholder="Ingrese su email">
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
                     <input type="password" class="form-control" id="pwd" name="regisPassword" placeholder="Ingrese su contraseña">
            </div>
        </div>   
    </div>

    <?php
    // // creamos el objeto de php e instanciamos metodo NO estatico
    // $registro = new controladorFormulario();
    // $registro -> ctrRegistro();


    //creamos el objeto de php e instanciamos metodo estatico

    $registro = controladorFormulario::ctrRegistro();



    if($registro == "ok"){

        //mensaje de registro exitoso!

        echo '<div class="alert alert-success"> El usuario ha sido registrado </div>';

        // script para guardar una sola vez el usuario de los imputs.
        // limpiamos el almacenamiento del navegador

       echo '<script>
        if ( window.history.replaceState ) {
            window.history.replaceState ( null , null , window.location.href ) ;
        }
        </script>';
    }
    ?>

    <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>

</div>