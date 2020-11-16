<?php include_once("C:\\Seguridad\\ejemplo2.inc.php") ?>
<?php Encabezado() ?>
<?php echo "El resultado de multiplicar 7 * 9 es: ", Calcula(7,9), "<br>"; ?>
<?php Pie() ?>

Lisa de los ficheros utilizados por include <br>
<?php
$z = get_included_files();
foreach($z as $clave=>$valor) {
    echo "Clave: ",$clave," Valor: ","<br>";
};
show_source("C:\\Seguridad\\ejemplo2.inc.php");