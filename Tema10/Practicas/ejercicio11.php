<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $a = $_REQUEST['n1'];
    $b = $_REQUEST['n2'];

    print "La suma es: " . ($a + $b) . "<BR>";
    echo "La resta es: " . ($a - $b) . "<BR>";
    echo "La multiplicacion es: " . ($a * $b) . "<BR>";
    echo "La division es: " . ($a / $b) . "<BR>";

    print "La potencia cuarta de la suma es: " . ceil(pow(($a + $b), 4)) . "<br>";
    print "La raiz quinta del cubo de la suma es: " . ceil(pow(pow(($a + $b), 3), (1 / 5))) . "<br>";
    ?>

    <form name="prueba" method="post" action="">

        Introduce un numero: <br>
        <input type="text" name="n1" value='' required><br>
        Introduce otro numero: <br>
        <input type="text" name="n2" value='' required><br>
        <input type="submit" value="enviar">
        <input type="reset" value="borrar">
    </form>
</body>

</html>