<!doctype html public "-//W3C//DTD HTML 4.0 //EN"> 
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-16">
       <title>Script llamado por ejercicio19a</title>
</head>
<body>
  <?php
   echo "El metodo usado fué: ",$_SERVER['REQUEST_METHOD'],"<br>";
   
   if ($_POST['num'] > 0)
      echo  "El numero: ",$_POST['num']," es positivo<br>";
   elseif  ($_POST['num'] == 0)
      echo  "El numero: ",$_POST['num']," es cero<br>";
   else
      echo  "El numero: ",$_POST['num']," es negativo<br>";

  ?>
  <br><br>
  <a title="Volver" href="ejercicio19a.php">Volver a la página
  anterior</a><br>

</body>
</html>


