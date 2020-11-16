<HTML>

<HEAD>
<link rel="stylesheet" href="estilos.css">
</HEAD>

<BODY>

<form name='mi_formulario' action='visor2.php' method='post'> 


Escribe tu nombre y apellidos:
<input type='text' name='nombre' value='' size=15><br> 

¿En que situacion se encuentra actualmente?<br> 
<input type='radio' name="pregunta" value='Menor emancipado.'> Menor emancipado.<br> 
<input type='radio' name="pregunta" value='Menor viviendo en el domicilio familiar.'> Menor viviendo en el domicilio familiar.<br> 
<input type='radio' name="pregunta" value='Mayor de edad viviendo en el domicilio familiar.'> Mayor de edad viviendo en el domicilio familiar.<br> 
<input type='radio' name="pregunta" value='Independizado.'> Independizado.<br> 
 

¿Que estudios ha obtenido el alumno?<br>
<input type='checkbox' checked name='estudios1' value='ESO'>E.S.O</br>
<input type='checkbox' name='estudios2' value='Bachiller'>Bachiller</br>
<input type='checkbox' name='estudios3' value='Medio'>Grado Medio o Superior</br>
<input type='checkbox' name='estudios4' value='Superior'>Carrera</br>
 


<input type="hidden" name='oculto' value='Esto iría oculto'><br> 

<input type="submit" value="enviar"> 

<input type="reset" value="borrar"> 

</FORM> 
</BODY> 
</HTML>