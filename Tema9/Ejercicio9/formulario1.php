<HTML>

<HEAD>
<link rel="stylesheet" href="estilos.css">
</HEAD>

<BODY>

<form name='mi_formulario' action='visor1.php' method='post'> 


Escribe tu nombre:
<input type='text' name='nombre' value='' size=15><br> 


Escribe tus apellidos:
<input type='text' name='apellidos' value=''><br> 


Ingresa tu fecha de nacimiento:
<input type='text' name='edad' value=''><br>

Introduce tu direccion:
<input type='text' name='direccion' value=''><br>


Introduce tu numero de telefono:
<input type='text' name='telefono' value=''><br>


Selecciona tus estudios:<br>
<input type='checkbox' checked name='estudios' value='ESO'>E.S.O</br>
<input type='checkbox' name='estudios' value='Bachiller'>Bachiller</br>
<input type='checkbox' name='estudios' value='Medio'>Grado Medio</br>
<input type='checkbox' name='estudios' value='Superior'>Grado Superior</br>
<input type='checkbox' name='estudios' value='Superior'>Carrera</br>


Selecciona tu rango de edad:<br> 
<input type='radio' name="menor" value='Menor de edad.'> Menor de 18 años<br> 
<input type='radio' name="hasta25" value='Entre 18 y 25 años.'> Entre 18 y 25 años<br> 
<input type='radio' name="mas25" value='Mayor de 25 años.'> Mayor de 25 años<br> 


¿Que preferencia de horario tiene? 
<select name="horario">
        <Option selected>Mañana. 08:00h - 14:00h</option>
        <Option>Tarde. 16:00h - 22:00h</option>
</select>


<br> Si desea añadir alguna observacion: <br> 
<textarea rows=5 cols=50 name='texto'></textarea><br> 


<input type="hidden" name='oculto' value='Esto iría oculto'><br> 

<input type="submit" value="enviar"> 

<input type="reset" value="borrar"> 

</FORM> 
</BODY> 
</HTML>