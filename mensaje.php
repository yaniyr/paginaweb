<?php
 include 'conexion.php';
// recibir datos y almacenarlos en variables

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $curp = $_POST['curp'];
    $sexo = $_POST['sexo'];

//consulta para insertar
$insertar = "INSERT INTO registros(nombre, apellidos, curp, sexo) VALUES ('$nombre','$apellidos', '$curp','$sexo')";

//ejecutar consulta

$resultado = mysqli_query($conexion, $insertar);
if (!$resultado)
{
    echo "Error al enviar";
    
} 
else
{
    echo  "Enviado";
 
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jardin de Niños Luis Pasteur</title>

    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/font-awesome.css">

    <script src="js/jquery-3.2.1.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

    <section class="form_wrap">
        
        <section class="mensaje-exito">
            <h1>SU DATOS SE ENVIARON EXITOSAMENTE</h1>
            <br>
 
            <a href="index.html">Regresar al Inicio</a>
        </section>

    </section>



</body>
</html>