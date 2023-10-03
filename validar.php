<?php
include 'conexion.php';
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];

$consulta= "SELECT * FROM administrador WHERE usuario ='$usuario' and clave='$clave' ";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);
if ($filas>0) 
{
header("location: index.php")	;
}
else
{
	echo "error en la autenticación";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>