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
        require_once('class.libro.php');
        $aut = new autor();
        $lib = new libro();
        $autores = $aut->obtenerAutores();
        $libro = $lib->obtenerLibro($id);
        require_once('modificar.php');
    }

    function aplicarCambios(int $id, String $newTitulo, String $newAutor, bool $newDisp){
        require_once('class.libro.php');
        require_once('class.autor.php');
        $lib = new libro($id, $newTitulo, $newAutor, $newDisp);
        $lib->modificarLibro();
        $libros = $lib->obtenerLibros();
        require_once('inicio.php');
    }
?>