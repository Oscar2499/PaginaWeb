<?php

// Variable que almacena el correo receptor
$destino = "oelo9924@gmail.com";

// Variable que almacena el asunto del formulario
$asunto = "Prueba Curso Web";

// Variable que trae el nombre del input formulario
$nombre = $_POST["nombre"];

// Variable que trae los apellidos del input formulario
$apellidos = $_POST["apellidos"];

// Variable que trae el telefono del input formulario
$telefono = $_POST["telefono"];

// Variable que trae el correo del input formulario
$correo = $_POST["correo"];

// Variable que trae el mensaje del input formulario
$mensaje = $_POST["mensaje"];

// Variable que concatena TODAS las variables anteriores para crear el cuerpo del correo
$contenido = "Nombre: " . $nombre . "\nApellidos: " . $apellidos . "\nTelefono: " . $telefono . "\nCorreo: " . $correo . "\nMensaje: " . $mensaje;

// Funcion que manda el correo, primero la variable del correo receptor, el asunto y finalmente el contenido
mail($destino, $asunto, $contenido);

// Funcion que re dirige al usuario despues de que el correo se envia
header("Location:index.html")

?>