<?php

// html/ListadoProductos.php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/bs/css/bootstrap.css">
    <link href="../html/css/menu.css" rel="stylesheet" type="text/css" />
	<title>
		Listado de productos
	</title>
</head>

<body>

<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
				<h1>Listado de productos</h1>
					<table class="tabla-productos">
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
				<div class="links-menu">
					<a href="../controllers/Inicio.php">Volver</a>
					<a href="../controllers/altaProducto.php">Agregar producto</a>
					<a href="../controllers/eliminarProducto.php">Eliminar producto</a>
				</div>
	    	</div>
    	</div>
</div>
    <script> src="../html/css/bs/css/bootstrap.js"</script>

</body>

</html>