<?php
//..html/FormEditarProducto.php
?>

<!DOCTYPE html>
<html>

<head>
    <title>
        Edicion de producto
    </title>
</head>

<body>
 
<h1>Datos del producto</h1>


    <h1>Editar producto en stock</h1>
    <form action="" method="POST">
    <label for="nombre-producto"> Seleccione el producto a editar: </label>
        <br /><br />
        <label for="categoria"> Seleccione nueva categoria por favor: </label>
        <select name="categoria" id="categoria">
            <?php foreach ($this->categorias as $c) { ?>
                <option value="<?= $c['categoria_id'] ?>"><?= $c['nombre_categoria'] ?></option>
            <?php } ?>
        </select>
        <br /><br />
        <label for="nombre-producto-nuevo">Nuevo Nombre: </label>
        <input type="text" name="nombre-producto-nuevo" id="nombre-producto-nuevo" required>
        <br /><br />
        <label for="cantidad">Nueva Cantidad: </label>
        <input type="text" name="cantidad" id="caantidad">
        <br /><br />
        <label for="precio">Nuevo Precio: </label>
        <input type="precio" name="precio" id="precio">
        <br /><br />
        <input type="submit" value="Crear">
    </form>
    <br />
    <br />
    <a href="../controllers/listaproductos.php">Volver</a>
</body>

</html>