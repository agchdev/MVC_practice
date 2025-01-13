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
                    mostrarLibros();
                ?>
            </table>
        </section>
    </form>
</body>
</html>