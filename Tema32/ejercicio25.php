<?php
/*
Crea un array bidimensional que contenga los nombres de cinco alumnos y las
calificaciones de tres materias (biología, física y latín por ejemplo). El primer índice puede
ser el número de lista y los segundos pueden ser de tipo asociativo ('nombre', 'biologia',
'fisica', 'latin', por ejemplo). Asígnales valores a los elementos del array y completa el script
de forma que se visualice un listado con los nombres de los alumnos y las calificaciones de
cada una de las materias.
*/
$notasalum=array(
    "luis" => array (
        "biologia" => 5,
        "fisica" => 3,
        "latin" => 8,
    ),
    "raul" => array (
        "biologia" => 3,
        "fisica" => 8,
        "latin" => 10,
    ),
    "emma" => array (
        "biologia" => 5,
        "fisica" => 5,
        "latin" => 8,
    ),
    "ines" => array (
        "biologia" => 9,
        "fisica" => 0,
        "latin" => 1,
    ),
    "bea" => array (
        "biologia" => 3,
        "fisica" => 4,
        "latin" => 8,
    )
);


foreach($notasalum as $pepe=>$pepa) {
    echo "indice ", $pepe, " Valor: ", $pepa, "<br>";
    //Haciendo esto saca que $pepa es un array sin mas pq no se accede a su valor sino a  que es un array
}



foreach($notasalum as $alum=>$valor1) {
    foreach($valor1 as $asig=>$ValorReal) {
        echo "Alumno: ",$alum, " Asginatura: ",$asig, " Valor: ", $ValorReal, "<br>";
    }
}