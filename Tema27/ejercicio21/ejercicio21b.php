<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-16">
       <title>Script llamado por ejercicio21a</title>
</head>
<body>
  <?php
  
  
// Desactivar toda notificación de error
error_reporting(0);
 
// Notificar solamente errores de ejecución
error_reporting(E_ERROR | E_WARNING | E_PARSE);

   $resp1corre="Zamora";
   $resp2a="Leon";
   $resp2b="Salamanca";
   $resp2c="Soria";
   echo "El metodo usado fué: ",$_SERVER['REQUEST_METHOD'],"<br>";
   echo  "El nombre es: ",$_REQUEST['nombre'],"<br>";
   echo  "El primer apellido es: ",$_REQUEST['ape1'],"<br>";
   echo  "El segundo apellido es: ",$_REQUEST['ape2'],"<br>";
   echo  "La respuesta elegida a la primera pregunta ha sido: ";
   if ($resp1corre==$_REQUEST['opcion'])
     echo "correcta";
   else
     echo "incorrecta";
   echo  "<br>Las respuestas elegidas a la segunda pregunta han sido: ";
   if ($resp2a==$_REQUEST['opcion1'] && $resp2b==$_REQUEST['opcion2']
        && $resp2c==$_REQUEST['opcion4'] && !$_REQUEST['opcion3'])
          echo "correctas";
   else
     echo "incorrectas";
  ?>

</body>
</html>

