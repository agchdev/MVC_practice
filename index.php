<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modelo.php" method="post" enctype="multipart/form-data">
        <input type="submit" value="borrar">
        <section>
            <table>
                <tr>
                    <th></th>
                    <th>Titulo</th>
                    <th>Autor</th>
                    <th>Disponibilidad</th>
                </tr>
                <?php
                    require_once('modelo.php');
                    $libros = mostrarLibros();  // Aquí obtenemos el array de libros
                    // Mostramos los libros en la tabla
                    if ($libros) {
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
            </table>
        </section>
    </form>
</body>
</html>