<?php
    function borrar(int $id){
        require_once('class.libro.php');
        $lib = new libro();
        $lib->setID($id);
        $lib->borrarLibro();
        $libros = $lib->obtenerLibros();
        require_once('inicio.php');
    }

    function modificar(int $id){
        require_once('class.autor.php');
        $aut = new autor();
        $autores = $aut->obtenerAutores();
        $autor = $aut->obtenerAutor();
        require_once('modificar.php');
    }

    function aplicarCambios(String $newTitulo, String $newAutor, String $newDisp){

    }
?>