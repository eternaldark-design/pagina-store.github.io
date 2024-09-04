<?php
include 'conexion.php';
$correo = $_POST["correo"];
$usuario = $_POST["usuario"];
$insertar = "INSERT INTO enviar(correo,usuario)
VALUES ('$correo','$usuario')";
$verificar_usuario = mysqli_query($conexion,"SELECT * FROM enviar where usuario = '$usuario'");
$resultado = mysqli_query($conexion,$insertar);
if(!$resultado){
    echo " error al enviar";
}
else
{
    echo "El correo se envio correctamente";
}
mysqli_close($conexion);
?>