 <?php
error_reporting(E_ERROR | E_WARNING | E_PARSE);
$a = $_REQUEST['num'];
$restos=['Exacto','Uno','Dos','Tres','Cuatro','Cinco','Seis','Siete','Ocho','Nueve','Diez','Once'];

for ($i = 0; $i < 12; $i++){
    if(($a % 12)==$i){
        echo "El resto de la division es: ",$restos[$i];
    }
}
?>  