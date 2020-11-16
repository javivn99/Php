<?php

$encontrado="false";
$i=1;
while($i<7) {
    mt_srand((double)microtime()*1000000);
    $elemento=mt_rand(1,49);
    for ($j=1;$j<7;$j++){
        if($elemento==$a[$j])
            $encontrado = "true";
    }
    if ($encontrado=="false") {
        $a[$i]=$elemento;
        $i++;
    } else {
        $encontrado="false";
    }
}

print ("<table border=2 width=400 align-center>");
for ($filas=1;$filas>0;$filas--){
    echo "<tr>";
    for($columnas=6;$columnas>0;$columnas--){
        echo "<td align=center>";
            echo $a[$columnas];
            print "</td>";
    }
    print "</tr>";
}