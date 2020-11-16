<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de colores</title>
</head>
<body>
    <?php
        $A=255;
        $x=0;$y=0;$z=0;
        print ("<table width=300 border=2>");
        while ($A>0){
            echo "<tr><td align=center style='background:RGB($x,$y,$z)'>";
            print $A;
            $A-=5;
            $x+=5;$y+=5;$z+=5;
            print("</td></tr>");
        }
        print "</table>";
    ?>
</body>
</html>