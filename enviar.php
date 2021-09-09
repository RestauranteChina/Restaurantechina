<?php
$destino="xlaxvideogames@gmail.com";
$nombre=$_POST['Nombre'];
$correo=$_POST['Correo'];
$telefono=$_POST['Teléfono'];
$mensaje=$_POST['Mensaje'];
$contenido="Nombre:". $nombre . "Correo: " . $correo . "Teléfono: " . $teléfono . "Mensaje: " . $mensaje;
mail($destino, "contactanos", $contenido);
header("location:gracias.html");
?>
