<?php
//..html/FormAltaVenta.php
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Alta venta y detalle de venta
    </title>
</head>

<body>
    <h1>Ventas</h1>
    </br>
    <h2>Nueva venta</h2>
    </br>

    <form action="" method="POST">

        <label for="fecha">Dia: </label>
        <input type="text" name="dia" id="d">
        <br /><br />
        <label for="fecha">Mes: </label>
        <input type="text" name="mes" id="m">
        <br /><br />
        <label for="fecha">Anio: </label>
        <input type="text" name="anio" id="a">
        <br /><br />
        <input type="submit" value="ingresar venta">

        </br>

        <h2>Detalle de ventas realizadas</h2>

        </br>

        <table>
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
        <br /><br />
        <a href="../controllers/inicio.php">Volver</a>
</body>

</html>