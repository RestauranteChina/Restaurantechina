<?php
$destino="xlaxvideogames@gmail.com";
$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$telefono=$_POST['Teléfono'];
$mensaje=$_POST['Mensaje'];
$contenido="Nombre:". $nombre . "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje: " . $mensaje;
mail($destino, "Contacto", $contenido);
header("location:gracias.html");
?>
