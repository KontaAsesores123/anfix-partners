<?php

//Función auxiliar para imprimir contenido en la pantalla
function print_result($title,$value){
	echo "<div style='color: #6d6d6d; background-color: #eee; font-family: Arial; padding: 5px 0 5px 10px; margin: 5px 0 15px;'>
	<b style='color:#007acc;'>$title</b><pre>".print_r($value,true).'</pre></div>';
}  