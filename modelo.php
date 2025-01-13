<?php
    function mostrarLibros(){
        require_once('class.libro.php');
        $lib = new libro();
        $libros = $lib->obtenerLibros();  // Aquí obtenemos el array de libros
    
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td><input type=\"checkbox\"></td>";
            echo "<td>" . $libro['titulo'] . "</td>";
            echo "<td>" . $libro['autor'] . "</td>";
            echo "<td>" . ($libro['disponible'] ? 'Sí' : 'No') . "</td>";
            echo "</tr>";
        }
    }
?>