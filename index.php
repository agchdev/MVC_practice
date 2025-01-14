<?php
    public function modificar(){
        
    }

    if(isset($_REQUEST["action"])){ // Si se ha pulsado un boton
        $action = $_REQUEST["action"]; // Creamos la variable de accion

        $action(); // Ejecutamos la accion
    }else{
        require_once('class.libro.php');
        $lib = new libro();
        $libros = $lib->obtenerLibros();  // Aquí obtenemos el array de libros
        
        require_once('inicio.php');
    }
    
?>