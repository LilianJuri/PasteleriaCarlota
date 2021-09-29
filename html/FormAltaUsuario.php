<?php
//..html/FormAltaUsuario.php
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
        Alta usuario
    </title>
</head>

<body>

<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
                <h1>Alta nuevo usuario</h1>
                <form action="" method="POST">
                    <br /><br />
                    <label for="tipo-usuario">Tipo usuario: </label>
                    <input type="text" name="tipo-usuario" id="tipo-usuario" required>
                    <br /><br />
                    <label for="nombre-usuario">Nombre usuario: </label>
                    <input type="text" name="nombre-usuario" id="nombre-usuario">
                    <br /><br />
                    <label for="contrasenia">Contrasenia: </label>
                    <input type="text" name="contrasenia" id="contrasenia">
                    <br /><br />
                    <input type="submit" value="Crear usuario">
                </form>
                <br />
                <br />
                <div class="links-menu">
                <a href="../controllers/listausuarios.php">Volver</a>
                </div>
            </div>
    	</div>
</div>
    <script> src="../html/css/bs/css/bootstrap.js"</script>
</body>

</html>