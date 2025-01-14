<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php?action=editar" method="post">
        <section>
            <?php echo "<input type=\"text\" name=\"titulo\" value=".$libro[0].">"; ?>
            <select name="autor">
                <?php
                    foreach ($autores as $autor) {
                        echo "<option value=".$autor["dni"].">".$autor["nombre"]."</option>";
                    }
                ?>
            </select>
            <input type="checkbox" name="disponible">
        </section>
        <input type="submit" value="Añadir" name="añadir">
        <?php echo "<input type="hidden" value=\".$libro[1].\" name="id">" ?>
    </form>
</body>
</html>