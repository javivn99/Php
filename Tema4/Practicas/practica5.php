<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nombre = "Pepe";
        echo "Ahora me llamo ", $nombre;

        $nombre = "Antonio";
        echo "<br>Pero ahora soy ", $nombre;
    ?>
    <?php
        function dimeNombre() {
            $nombre = "Lucas";
            echo "<br>Dentro de la funcion mi nombre es ", $nombre;
        }

        dimeNombre();
    ?>
    <?php
        echo "<br>Fuera de la funcion vuelvo a ser " ,$nombre, " de nuevo";
    ?>

    <!-- Tambien se puede hacer en un mismo script, la salida es igual -->
</body>
</html>