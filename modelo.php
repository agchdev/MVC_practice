<?php
    function mostrarLibros(){
        require_once('class.libro.php');
        $lib = new libro();
        $libros = $lib->obtenerLibros();  // Aquí obtenemos el array de libros
    
        foreach ($libros as $libro) {
            
        }
    }
?>