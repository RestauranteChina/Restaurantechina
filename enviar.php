<?php
$destino="xlaxvideogames@gmail.com";
$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$telefono=$_POST['Teléfono'];
$mensaje=$_POST['Mensaje'];
$contenido="Nombre:". $Nombre . "\nCorreo: " . $Correo . "\nTeléfono: " . $Teléfono . "\nMensaje: " . $Mensaje;
mail($destino, "contactanos", $contenido);
header("location:gracias.html");
?>
