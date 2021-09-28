<?php
//..html/FormAltaUsuario.php
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>
        Alta usuario
    </title>
</head>

<body>
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
    <a href="../controllers/listausuarios.php">Volver</a>
    <script> src="js/bootstrap.js"</script>
</body>

</html>