<?php
	
	ModificarProducto($_POST['id'], $_POST['nombre'], $_POST['apellidos'], $_POST['curp'] );

	function ModificarAspirante($id, $nombre, $telefono, $tutor)
	{
		include 'conexion.php';
		echo $sentencia="UPDATE aspirante SET nombre='".$nombre."', apellidos='".$apellidos."', curp='".$curp."' WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al actualizar datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("¡Datos Actualizados Exitosamante!");
	window.location.href='index.php';
</script>