<?php
//..html/EliminarProducto.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        Eliminar producto
    </title>
</head>

<body>
    <h1>Eliminar producto</h1>

    </br>

    <form action="" method="POST">
        <label for="eproducto"> Seleccione producto a eliminar por favor: </label>
        <select name="eproducto" id="eproducto">
            <?php foreach ($this->productos as $p) { ?>
                <option value="<?= $p['producto_id'] ?>"><?= $p['nombre_producto'] ?></option>
            <?php } ?>
        </select>
        </br></br>
        <input type="submit" value="eliminar producto">

        </br></br>

        <a href="../controllers/listaproductos.php">Volver a lista de productos</a>

        <script> src="js/bootstrap.js"</script>
</body>

</html>