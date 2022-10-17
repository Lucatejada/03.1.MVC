<?php

#El INDEX va a mostrar la salida de las vistas al ususario y tambiein a traves de él enviaremos
#las distintas acciones que el usuario envie al controlador. 

/*require ( ) establece que el código del archivo invocado es requerido , es decir , obligatorio para el
funcionamiento del programa . Por ello , si el archivo especificado en la función require ( ) no se encuentra
saltará un error " PHP Fatal error " y el programa PHP se detendrá .

#La versión require_once ( ) funcionan de la misma forma que sus respectivo , salvo que , al utilizar la versión
once , se impide la carga de un mismo archivo más de una vez .
*/ 

require_once "controladores/plantilla.contro.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/formularios.modelo.php";



// require_once "modelos/conexion.php";
// $conexion = Conexion::conectar();
// echo '<pre>'; print_r($conexion); echo '</pre>';


$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla(); #treamos al metodo




?>