<?php
//..html/FormAltaProducto.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        Alta producto nuevo
    </title>
</head>

<body>
    <h1>Cargar producto en stock</h1>
    <form action="" method="POST">
        <label for="categoria"> Seleccione categoria por favor: </label>
        <select name="categoria" id="categoria">
            <?php foreach ($this->categorias as $c) { ?>
                <option value="<?= $c['categoria_id'] ?>"><?= $c['nombre_categoria'] ?></option>
            <?php } ?>
        </select>
        <br /><br />
        <label for="nombre-producto">Nombre: </label>
        <input type="text" name="nombre-producto" id="nombre-producto" required>
        <br /><br />
        <label for="cantidad">Cantidad: </label>
        <input type="text" name="cantidad" id="caantidad">
        <br /><br />
        <label for="precio">Precio: </label>
        <input type="precio" name="precio" id="precio">
        <br /><br />
        <input type="submit" value="Crear">
    </form>
    <br />
    <br />
    <a href="../controllers/listaproductos.php">Volver</a>
    <script> src="js/bootstrap.js"</script>
</body>

</html>