<?php
$valores=Array("Verde","Verano","Rolls-Royce","Millonario");
# a diferencia de lo que ocurre al definir elementos de array asociativos
# en este caso los indices asociativos (color, estación, etc.) no van
# entre comillas
setcookie("cookie3[color]",$valores[0],time()+3600);
setcookie("cookie3[estacion]",$valores[1],time()+3600);
setcookie("cookie3[coche]",$valores[2],time()+3600);
setcookie("cookie3[finanzas]",$valores[3],time()+3600);
# la variable superglobal $_COOKIE['cookie3'] contiene un array, por ello
# la lectura de sus valores debe hacers considerando que se trata de un
# array bidimensional
if (isset($_COOKIE['cookie3']) ) {
while( list( $indice, $valor) = each($_COOKIE['cookie3']) ) {
echo "$indice == $valor\n";
}
}
?>