<?php
//..html/EliminarUsuario.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/bs/css/bootstrap.css">
    <link href="../html/css/menu.css" rel="stylesheet" type="text/css" />
    <title>
        Eliminar usuario
    </title>
</head>

<body>
<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
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

                    <div class="links-menu">
                    <a href="../controllers/listausuarios.php">Volver a lista de usuarios</a>
                    </div>
            </div>
    	</div>
</div>
        <script> src="../html/css/bs/css/bootstrap.js"</script>
</body>

</html>