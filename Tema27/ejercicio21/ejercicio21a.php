<HTML>
<HEAD>
</HEAD>
<BODY>

<form name='formuljl2' action='ejercicio21b.php' method='post'>
Encuesta de recogida de datos<br>

Introduce el nombre:
<input type='text' name='nombre' value='' size=15><br>

Introduce el primer apellido:
<input type='text' name="ape1" value="" size=15><br>

Introduce el segundo apellido:
<input type="text" name="ape2" value='' size=10><br>

Elije la respuesta correcta a esta pregunta:<br>
El rio Duero pasa por:<br>

<input type='radio' name='opcion' value='Zaragoza'>Zaragoza<br>
<input type='radio' name='opcion' value='Madrid'>Madrid<br>
<input type='radio' name='opcion' value='Cazorla'>Cazorla<br>
<input type='radio' name='opcion' value='Zamora'>Zamora<br>

Ahora señala las opciones que consideres correctas:<br>
¿Cuales de las siguientes ciudades son de Castilla-Leon?<br>

<input type='checkbox' name='opcion1' value='Leon'>Leon<br>
<input type='checkbox' name='opcion2' value='Salamanca'>Salamanca<br>
<input type='checkbox' name='opcion3' value='Vitoria'>Vitoria<br>
<input type='checkbox' name='opcion4' value='Soria'>Soria<br>
   
<input type='hidden' name='oculto' value='Dato oculto'><br>

<input type='submit' value='Enviar'>

<input type='reset' value='Borrar'>

</FORM>
</BODY>
</HTML>
