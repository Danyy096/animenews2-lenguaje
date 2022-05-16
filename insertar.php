<?php

include_once('conexion.php');
include_once('recom.php');

$Nombre = $_POST['Nombre'];
$Comentarios = $_POST['Comentarios'];

$conectar=conn();
$sql = "INSERT INTO recomendaciones (Nombre, Comentarios) VALUES ('$Nombre','$Comentarios')";
$result = mysqli_query($conectar, $sql)or trigger_error("Fallo en el SQL / Query".mysqli_errorr($conectar));
echo "$sql";

?>