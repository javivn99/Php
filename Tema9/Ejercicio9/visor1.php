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
echo "Nombre: ".$_POST['nombre'],"<br>";
echo $_POST['apellidos'],"<br>";
echo $_POST['edad'],"<br>";
echo $_POST['direccion'],"<br>";
echo $_POST['telefono'],"<br>";
echo $_POST['estudios'],"<br>";
echo $_POST['menor'],"<br>";
echo $_POST['hasta25'],"<br>";
echo $_POST['mas25'],"<br>";
echo $_POST['horario'],"<br>";
echo $_POST['texto'],"<br>";


?>
</body>
</html>
