<?php
//..html/FormEditarProducto.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        Edicion de producto
    </title>
</head>

<body>
 
<h1>Datos del producto a editar</h1>
 
<?php foreach ($this->productos as $e) { 
          if ($e['producto_id'] == $_GET['p']){ $productoelegido = $e;  ?>
			<tr>
				<td><?= $e['nombre_producto'] ?></a></td>
				<td><?= $e['cantidad'] ?></td>
				<td><?= $e['precio'] ?></td>
				<td><?= $e['nombre_categoria'] ?></td>
			</tr>
		<?php }} ?>

    <h1>Editar producto en stock</h1>
    <form action="" method="POST">
        <br /><br />
        <label for="categoria"> Seleccione nueva categoria por favor: </label>
        <select name="categoria" id="categoria">
            <?php foreach ($this->categorias as $c) { ?>
                <option value="<?= $c['categoria_id'] ?>"><?= $c['nombre_categoria'] ?></option>
            <?php } ?>
        </select>
        <br /><br />
        <label for="nombre-producto-nuevo">Nuevo Nombre: </label>
        <input type="text" name="nombre-producto" id="nombre-producto" value=<?= $productoelegido['nombre_producto'] ?> required>
        <br /><br />
        <label for="cantidad">Nueva Cantidad: </label>
        <input type="text" name="cantidad" id="cantidad" value=<?= $productoelegido['cantidad'] ?> >
        <br /><br />
        <label for="precio">Nuevo Precio: </label>
        <input type="precio" name="precio" id="precio" value=<?= $productoelegido['precio'] ?> >
        <br /><br />
        <input type="submit" value="Crear">

        <input id="productoid" name="productoid" type="hidden" value=<?= $productoelegido['producto_id'] ?>>
    </form>
    <br />
    <br />
    <a href="../controllers/listaproductos.php">Volver</a>

    <script> src="js/bootstrap.js"</script>
</body>

</html>