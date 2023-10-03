<?php
	EliminarProducto($_GET['no']);

	function EliminarAspirante($id)
	{
		include 'conexion.php';
		$sentencia="DELETE FROM aspirante WHERE id='".$id."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("¡Registro Eliminado!");
	window.location.href='index.php';
</script>