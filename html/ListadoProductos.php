<?php

// html/ListadoProductos.php

?>

<!DOCTYPE html>
<html>

<head>
	<title>
		Listado de productos
	</title>


	<style type="text/css">
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 50%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
	</style>
</head>

<body>
	<h1>Listado de productos</h1>


	<table>
		<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Categoria</th>
		</tr>

		<?php foreach ($this->productos as $e) { ?>
			<tr>
				<td><a href="editarProducto.php?p=<?= $e['producto_id'] ?>"><?= $e['nombre_producto'] ?></a></td>
				<td><?= $e['cantidad'] ?></td>
				<td><?= $e['precio'] ?></td>
				<td><?= $e['nombre_categoria'] ?></td>
			</tr>
		<?php } ?>

	</table>
	<br><br>
	<a href="../controllers/Inicio.php">Volver</a>
	<br><br>
	<a href="../controllers/altaProducto.php">Agregar producto</a>
	<br><br>
	<a href="../controllers/eliminarProducto.php">Eliminar producto</a>
	<br><br>
	<a href="../controllers/editarProducto.php">Editar producto</a>

</body>

</html>