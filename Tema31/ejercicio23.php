<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        print ("<table border=2 width=400 align-center>");
        $contador=1;
        for ($filas=5;$filas>0;$filas--) {
            echo "<tr>";
            for ($columnas=7;$columnas>0;$columnas--) {
                echo "<td align=center>";
                print $contador++;
                print ("</td>");
            }
            $columnas=7;
            echo "</tr>";
        }
        print "</table>";
    ?>
</body>
</html>