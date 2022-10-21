<?php
require_once "conexion.php";

class ModeloFormularios
{
    static public function mdlRegistro($tabla, $datos)
    {
        #statement //  declaracion 

        // Prepara una instrucción SQL para ser ejecutada por el PDOStatement :: execute ( ) método. 
        // La plantilla de declaración puede contener cero o más llamado (: nombre ) o signo de interrogación (? ) 
        // marcadores de parámetros para los cuales los valores reales se sustituirán cuando se ejecute la instrucción.
        // Los marcadores de parámetros con nombre y signo de interrogación no se pueden usar dentro del mismo plantilla de declaración;
        // solo uno u otro estilo de parámetro. Use estos parámetros para vincular cualquier entrada de usuario -, 
        // no incluya la entrada de usuario - directamente en la consulta.


        $stmt = Conexion::conectar()
            ->prepare("INSERT INTO $tabla(nombre, email,password) VALUES 
        (:nombre, :email, :password)");

        #bindParam() Vincula una variable de PHP a un parametro de sustitucion con nombre
        #o de signo de interrogacion correspondiente a la sentencia SQL que fue preparar la sentencia.

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }


    //metodo para seleccionar registros 

    static public function mdlSeleccionarRegistros($tabla, $item, $valor)
    {

        if ($item == null && $valor == null) {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla
        ORDER BY Id");
            $stmt->execute();
            return $stmt->fetchAll();
        } else {
            $stmt = Conexion::conectar()->prepare("SELECT *, DATE_FORMAT(fecha, '%d/%m/%Y') AS fecha FROM $tabla WHERE $item =:$item
        ORDER BY id DESC");
        $stmt->bindParam(":".$item, $valor, PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
        }
    }

    //actualizar REGISTROS
    static public function mdlActualizarRegistro($tabla, $datos)
    {
        
        $stmt = Conexion::conectar()
            ->prepare("UPDATE $tabla SET nombre=:nombre, email=:email ,password=:password WHERE id =:Id");

        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
        $stmt->bindParam(":Id", $datos["id"], PDO::PARAM_INT);

        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }

        $stmt = null;
    }
    
}
