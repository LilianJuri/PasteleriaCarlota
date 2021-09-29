<?php
//..html/FormAltaVenta.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/bs/css/bootstrap.css">
    <link href="../html/css/menu.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
    <title>
        Alta venta
    </title>
</head>

<body>
<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
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

                    <div class="links-menu">
                        <a href="../controllers/inicio.php">Volver</a>
                        <a href="../controllers/cancelarVenta.php">Cancelar venta</a>
                    </div>
            </div>
    	</div>
</div>
    <script> src="../html/css/bs/css/bootstrap.js"</script>
</body>

</html>