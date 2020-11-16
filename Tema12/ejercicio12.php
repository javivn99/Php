<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 11</title>
</head>

<body>
    <?php
    // number_format($a, 4 , " . " ," ") --> Asi seria para que muestre 4 decimales, separe los miles con un espacio y los decimales con un punto
    //Tambien se puede poner por separado, primero $a y luego con $b. Con la operacion entre medias.
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    $a = $_REQUEST['n1'];
    $b = $_REQUEST['n2'];

    print "La suma es: " . number_format(($a + $b) ,4 , " . " ," ") . "<BR>";
    echo "La resta es: " . number_format(($a - $b) ,4 , " . " ," ") . "<BR>";
    echo "La multiplicacion es: " . number_format(($a * $b) ,4 , " . " ," ") . "<BR>";
    echo "La division es: " . number_format(($a / $b) ,4 , " . " ," ") . "<BR>";

    print "La potencia cuarta de la suma es: " . number_format(ceil(pow(($a + $b), 4)), 4 , " . " ," ") . "<br>";
    print "La raiz quinta del cubo de la suma es: " . number_format(ceil(pow(pow(($a + $b), 3), (1 / 5))), 4, " . " ," ") . "<br>";
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