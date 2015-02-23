<?php

$mensaje=$_POST['mensaje'];
$mensaje.= "\n-------------------\n";
$mensaje.="\nDe: " . $_POST['nombre'];
$mensaje.="\nE-mail: " .$_POST['email'];
//En la siguiente línea ingresamos nuestra casilla de correo

$destino="seplarui@gmail.com";
$remitente= $_POST['email'];
$asunto= "Mensaje enviado por: "  .$_POST['nombre'];
mail($destino,$asunto,$mensaje, "From: $remitente");
//El mensaje que se mostrará al confirmar el envío.
echo "Mensaje enviado. Gracias por contactar con nosotros";

