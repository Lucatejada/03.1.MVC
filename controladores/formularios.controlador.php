<?php

class ControladorFormularios
{

    static public function ctrRegistro()
    {
        #          REGISTRO
        #          Colocar variables name en formulario de registro
        #          estas envian los datos post a BD
        if (isset($_POST["registroNombre"])) {

            // return $_POST["regisNombre"]."<br>".$_POST["regisEmail"].
            // "<br>".$_POST["regisPassword"]."<br>";return "ok";

            $tabla = "registros";

            $datos = array(
                "nombre" => $_POST["registroNombre"],
                "email" => $_POST["registroEmail"],
                "password" => $_POST["registroPassword"]
            );

            $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
            return $respuesta;
        }
    }

    //metodo para seleccionar registros 
    static public function ctrSeleccionarRegistros($item, $valor)
    {

        $tabla = "registros";
        $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);
        return $respuesta;
    }

    public function ctrIngreso()
    {
        if (isset($_POST["ingresoEmail"])) {
            $tabla = "registros";
            $item = "email";
            $valor = $_POST["ingresoEmail"];
            $respuesta = ModeloFormularios::mdlSeleccionarRegistros($tabla, $item, $valor);

            if ($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $_POST["ingresoPassword"]) {

                $_SESSION["validarIngreso"] = true;

                echo '<script>
                    if ( window.history.replaceState ) {
                     window.history.replaceState ( null , null , window.location.href ) ;
                    }
                    window.location = "index.php?pagina=inicio";
                    </script>';
                echo '<div class="alert alert-success"> Ingreso exitoso  </div>';
            } else {

                $_SESSION["validarIngreso"] = false;

                // script para guardar una sola vez el usuario de los imputs.
                // limpiamos el almacenamiento del navegador

                echo '<script>
                    if ( window.history.replaceState ) {
                     window.history.replaceState ( null , null , window.location.href ) ;
                    }
                </script>';
                echo '<div class="alert alert-danger">Error al ingresar al sistema, usuario o contraseña incorrectos  </div>';
            }
        }
        // echo '<pre>'; print_r($respuesta); echo '</pre>';
    }

    //actualizar registro
    public function ctrActualizarRegistro()
    {

        if (isset($_POST["actualizarNombre"])) {

            if ($_POST["actualizarPassword"] != "") {
                $password = $_POST["actualizarPassword"];
            } else {
                $password = $_POST["passwordActual"];
            }
            

        }
            $tabla = "registros";

            $datos = array(
                "nombre" => $_POST["actualizarNombre"],
                "email" => $_POST["actualizarEmail"],
                "password" => $password); 

            $respuesta = ModeloFormularios::mdlActualizarRegistro($tabla, $datos);

            if($respuesta == "ok"){
                echo '<script>
                if ( window.history.replaceState ) {
                    window.history.replaceState ( null , null , window.location.href ) ;
                }
                </script>';
                echo  '<div class="alert alert-success"> El usuario ha sido registrado </div>';
            }
            
            return $respuesta;
        }
    }
