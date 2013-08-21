<?php
//enviamos un email

$email = "example@example.com";
$titulo = "Web en construccion";
$mensaje = "El siguiente email quiere tener datos del sitio ".$_POST["email"].".";

mail($email, $titulo, $mensaje);

header("Location: index.html");

?>