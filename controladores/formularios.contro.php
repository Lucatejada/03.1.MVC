<?php

class controladorFormulario {

static public function ctrRegistro(){
    #          REGISTRO
    #          Colocar variables name en formulario de registro
    #          estas envian los datos post a BD
    if(isset($_POST["regisNombre"])){

        // return $_POST["regisNombre"]."<br>".$_POST["regisEmail"].
        // "<br>".$_POST["regisPassword"]."<br>";

        return "ok"; 
    }



}

}



?>