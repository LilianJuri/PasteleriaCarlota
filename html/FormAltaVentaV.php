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
    <title>
        Alta venta y detalle de venta
    </title>
</head>

<body>
<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
                <h1>Ventas</h1>
                </br>
                <h2>Nueva venta</h2>
                </br>

                <form action="" method="POST">

                    <label for="fecha">Dia: </label>
                    <input type="text" name="dia" id="d" value= <?= date("d") ?>>
                    <br /><br />
                    <label for="fecha">Mes: </label>
                    <input type="text" name="mes" id="m" value= <?= date("m") ?>>
                    <br /><br />
                    <label for="fecha">Anio: </label>
                    <input type="text" name="anio" id="a" value= <?= date("Y")  ?>>
                    <br /><br />
                    <input type="submit" value="ingresar venta">

                    </br>

                    <h2>Detalle de ventas realizadas</h2>

                    </br>

                    <table class="tabla-productos">
                        <tr>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Nº de Venta</th>
                        </tr>

                        <?php foreach ($this->detalle_venta as $d) { ?>
                            <tr>
                                <td><?= $d['nombre_producto'] ?></td>
                                <td><?= $d['precio'] ?></td>
                                <td><?= $d['cantidad'] ?></td>
                                <td><?= $d['venta_id'] ?></td>
                            </tr>
                        <?php } ?>

                    </table>
                    <div class="links-menu">
                    <a href="../controllers/inicio.php">Volver</a>
                        </div>
            </div>
    	</div>
</div>
        <script> src="../html/css/bs/css/bootstrap.js"</script>
</body>

</html>