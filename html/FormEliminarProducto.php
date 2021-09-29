<?php
//..html/EliminarProducto.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/bs/css/bootstrap.css">
    <link href="../html/css/menu.css" rel="stylesheet" type="text/css" />
    <title>
        Eliminar producto
    </title>
</head>

<body>
<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
                <h1>Eliminar producto</h1>

                    <form action="" method="POST">
                        <label for="eproducto"> Seleccione producto a eliminar por favor: </label>
                        <select name="eproducto" id="eproducto">
                            <?php foreach ($this->productos as $p) { ?>
                                <option value="<?= $p['producto_id'] ?>"><?= $p['nombre_producto'] ?></option>
                            <?php } ?>
                        </select>
                        </br></br>
                        <input type="submit" value="eliminar producto">
                    </form>
                <div class="links-menu">
                    <a href="../controllers/listaproductos.php">Volver a lista de productos</a>
                </div>
            </div>
    	</div>
</div>
        <script> src="../html/css/bs/css/bootstrap.js"</script>
</body>

</html>