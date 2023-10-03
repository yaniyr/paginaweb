<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jardin de Niños Luis Pasteur</title>
<style type="text/css">
@import url("css/mycss.css");
</style>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body>
<div class="todo">
  
  <div id="cabecera">
  	<img src="image/portadamanos.jpg" width="1188" id="img1">
  </div>
  
  <div id="contenido">
  	<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<thead>
        <th>ID</th>
        <th>Nombre/s</th>
        <th>Apellidos</th>
        <th>CURP</th>
        <th>Sexo</th>
      </thead>
      <?php
        include "conexion.php";
        $sentecia="SELECT * FROM aspirantes";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc())
        {
          echo "<tr>";
            echo "<td>"; echo $fila['id']; echo "</td>";
            echo "<td>"; echo $fila['nombre']; echo "</td>";
            echo "<td>"; echo $fila['apellidos']; echo "</td>";
            echo "<td>"; echo $fila['CURP']; echo "</td>";
            echo "<td>"; echo $fila['sexo']; echo "</td>";
            echo "<td><a href='modif.php?no=".$fila['id']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
           echo " <td><a href='eliminar.php?no=".$fila['id']."'> <button type='button' class='btn btn-danger'>Eliminar</button> </a></td>";
          echo "</tr>";
            
        }
      ?>

     
  		
  	</table>
  </div>
    <a href="index.html">Cerrar Sesion</a>
	<div id="footer">
  		<img src="image/portadamanos.jpg" id="img2">
  	</div>

</div>


</body>
</html>