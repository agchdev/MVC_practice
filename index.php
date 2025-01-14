<?php
    function ajuste(){
        require_once("modelo.php");
        if (isset($_POST["borrar"])) {
            if (isset($_POST["libros"])) {
                // Obetener id de los libros seleccionados
                $libros = $_POST["libros"];
                foreach ($libros as $libro) {
                    borrar($libro);
                }

            }
        }else if (isset($_POST["modificar"])) {
            if (isset($_POST["libros"])) {
                $libros = $_POST["libros"];
                if(count($libros) == 1){
                    $libro = $libros[0];
                    modificar($libro);
                }
            }
        }else if (isset($_POST["añadir"])) {
            if (isset($_POST["libros"])) { 
                // Eliminar espacios
                
            }
        }
    }

    function editar(){
        if(isset($_POST["añadir"])){      
            if(isset($_POST["titulo"])){
                if(trim($_POST["titulo"]) == ""){
                    require_once('class.libro.php');
                    $lib = new libro();
                    $libros = $lib->obtenerLibros();  // Aquí obtenemos el array de libros
                    require_once('inicio.php');
                }else{
                    $newTitulo = $_POST["titulo"];
                    $newAutor = $_POST["autor"];
                    echo "<p>".$newAutor."</p>";
                    if (isset($_POST["disponible"])) {
                        $newDisp = true;
                    }else{
                        $newDisp = false;
                    }
                    $id = $_POST["id"];
                    intval($id);

                    require_once("modelo.php");
                    aplicarCambios($id, $newTitulo, $newAutor, $newDisp);
                }
            }else{
                require_once('class.libro.php');
                $lib = new libro();
                $libros = $lib->obtenerLibros();  // Aquí obtenemos el array de libros
                require_once('inicio.php');
            }
        }

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