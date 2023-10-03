<?php
    $conexion= new mysqli("localhost", "jardinlp", "root", "root");
    //Comprobar conexion
    if(mysqli_connect_errno())
    {
        printf("Fallo la conexion");
    }
    else {
        //printf("Estas conectado");
    }
?>