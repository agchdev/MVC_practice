<?php
    function borrar(int $id){
        require_once('class.libro.php');
        $lib = new libro();
        $lib->setID($id);
        $lib->borrarLibro();
        $libros = $lib->obtenerLibros();
        require_once('inicio.php');
    }

    function modificar(int $id){}
?>