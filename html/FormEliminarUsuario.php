<?php
//..html/EliminarUsuario.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        Eliminar usuario
    </title>
</head>

<body>
    <h1>Eliminar usuario</h1>

    </br>

    <form action="" method="POST">
        <label for="eusuario"> Seleccione producto a eliminar por favor: </label>
        <select name="eusuario" id="eusuario">
            <?php foreach ($this->usuarios as $u) { ?>
                <option value="<?= $u['usuario_id'] ?>"><?= $u['usuario'] ?></option>
            <?php } ?>
        </select>
        </br></br>
        <input type="submit" value="eliminar usuario">

        </br></br>

        <a href="../controllers/listausuarios.php">Volver a lista de usuarios</a>

        <script> src="js/bootstrap.js"</script>
</body>

</html>