<?php
$server ="localhost";
$conexion = mysqli_connect($server, "root","","registro");
if($conexion){
    echo "conectado correctamente" . "<br>";
}
else
{
    echo "error al conectar la base de datos";
}
?>