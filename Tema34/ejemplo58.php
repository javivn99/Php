<?php
$a=array("Lunes","Martes","Miercoloes","Jueves",
"Viernes","Sábado","Domingo");
$b=array(
"Precio" => "17340 euros",
"Color" => "Rojo",
"Llantas" => "Aluminio");
$c=47; $d=""; $e=array();
echo "<h3>Valores usando sizeof()</h3>";
echo " a tiene: ",sizeof($a)," elementos<br>";
echo " b tiene: ",sizeof($b)," elementos<br>";
echo " c tiene: ",sizeof($c)," elementos<br>";
echo " d tiene: ",sizeof($d)," elementos<br>";
echo " e tiene: ",sizeof($e)," elementos<br>";
echo " f tiene: ",sizeof($f)," elementos<br>";
echo "<h3>Valores usando count()</h3>";
echo " a tiene: ",count($a)," elementos<br>";
echo " b tiene: ",count($b)," elementos<br>";
echo " c tiene: ",count($c)," elementos<br>";
echo " d tiene: ",count($d)," elementos<br>";
echo " e tiene: ",count($e)," elementos<br>";
echo " f tiene: ",count($f)," elementos<br>";
?>