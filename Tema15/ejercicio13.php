<?php
    $expl1= "BODY <br>";
    $expl1 .=<<<body
    El elemento body es el contenedor para todos los aspectos representables de un documento. Este es el lugar donde los autores arrojan todos los elementos y contenidos que sus visitantes alcanzarán.
    body;
    
    $expl2= "<br>HTML y HEAD <br>";
    $expl2 .=<<<hh
        La etiqueta html sirve como apertura y cierre a un codigo en html.
        HEAD es la primera de las dos partes en que se estructura un documento HTML. En la HEAD reside información acerca del documento, y generalmente no se ve cuando se navega por él. En la HEAD se pone el elemento lleno <TITLE> que es una breve descripción que identifica la página.
    hh;

    echo $expl1;
    echo $expl2;
?>