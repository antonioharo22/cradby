<?php 
	$nombre = 'Antonio';
	$email = $_POST['email'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Email: $email<br> Mensaje:".$_POST['mensaje'];


	mail('tuEmail', $asunto, $mensaje))
 ?>
