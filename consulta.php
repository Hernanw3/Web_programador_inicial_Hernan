<?php

$nombre = $_POST ['nombre'];
$email = $_POST ['email'];
$asunto = $_POST ['asunto'];
$mensaje = $_POST ['mensaje'];

/*$conexion = mysqli_connect('localhost','root','','programador_web_inicial_104') or exit ('No se pudo conectar a Base de datos');*/

$conexion = mysqli_connect('localhost','root','','programador_web_inicial_104') or exit ('No se pudo conectar a Base de datos');

mysqli_query($conexion, "INSERT INTO contacto VALUES (DEFAULT, '$nombre', '$email', '$asunto', '$mensaje')");

mysqli_close($conexion);

echo "Datos enviados correctamente";

header('location:contacto.php?ok');
