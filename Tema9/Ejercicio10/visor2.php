<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    
<?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
echo "Alumno: ".$_POST['nombre'],"<br>";
echo "Situacion actual: ".$_POST['pregunta'],"<br>";
echo "Ha obtenido: ".$_POST['estudios1'],"<br>";
echo "Ha obtenido: ".$_POST['estudios2'],"<br>";
echo "Ha obtenido: ".$_POST['estudios3'],"<br>";
echo "Ha obtenido: ".$_POST['estudios4'],"<br>";

?> 
</body>
</html>
