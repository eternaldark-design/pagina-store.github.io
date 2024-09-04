<?php
include 'conexion.php';
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$insertar = "INSERT INTO registro(correo,usuario)
VALUES ('$correo','$usuario')";
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM registro where usuario = '$usuario'");
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo " error al registrar";
}
else
{
    echo "usuario ingreso correctamente";
}
mysqli_close($conexion);
?>