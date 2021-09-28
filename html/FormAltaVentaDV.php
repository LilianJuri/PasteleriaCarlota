<?php
//..html/FormAltaVenta.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        Alta venta
    </title>
</head>

<body>
    <?php
    // $productos = $this->productos;

    // print_r($productos);

    ?>
    <h1>Cargar venta</h1>
    <form action="" method="POST">

        <label for="producto"> Seleccione producto por favor: </label>
        <select name="producto" id="producto">
            <?php foreach ($this->productos as $p) { ?>
                <option value="<?= $p['producto_id'] ?>"><?= $p['nombre_producto'] ?></option>
            <?php } ?>
        </select>

        <br /><br />
        <label for="cantidad">Cantidad: </label>
        <input type="text" name="cantidad" id="cantidad">
        <br /><br />
        <input type="submit" value="ingresar producto">
    </form>
    <br />

    <br /><br />
    <!-- <input type="hidden" name="idventaactual" value="<?= $p['producto_id'] ?>" /> -->
    <a href="../controllers/inicio.php">Volver</a>
    </br> </br>
    <a href="../controllers/cancelarVenta.php">Cancelar venta</a>
    <script> src="js/bootstrap.js"</script>
</body>

</html>