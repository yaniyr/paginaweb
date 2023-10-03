<?php
  
  $consulta=ConsultarProducto($_GET['no']);

  function ConsultarProducto( $id )
  {
   include 'conexion.php';
   $sentencia="SELECT * FROM aspirante WHERE id='".$id."' ";
   $resultado= $conexion->query($sentencia) or die ("Error".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['id'],
    $fila['nombre'],
    $fila['apellidos'],
    $fila['curp'],
    $fila['sexo']
   ];
  }
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Modificar Registro</title>
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
  	<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  		<span> <h1>Modificar Registro</h1> </span>
  		<br>
	  <form action="modif.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">

  		<label>Id Alumno: </label>
  		<input type="text" id="iden" name="id" value="<?php echo $consulta[0] ?>" ><br>
  		
  		<label>Nombre/s: </label>
  		<input type="text" id="nombre" name="nombre" value="<?php echo $consulta[1] ?>"><br>
  		
      <label>Apellidos: </label>
      <input type="text" id="apellidos" name="apellidos" value="<?php echo $consulta[2] ?>"><br>
      <label>CURP: </label>
      <input type="text" id="curp" name="curp" value="<?php echo $consulta[3] ?>"><br>

  		
  		<br>
  		<button type="submit" class="btn btn-success">Guardar</button>
     </form>
  	</div>
  	
  </div>
  
	<div id="footer">
  		<img src="image/portadamanos.jpg" id="img2">
  	</div>

</div>


</body>
</html>