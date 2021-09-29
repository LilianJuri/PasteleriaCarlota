<!-- html/ListadoUsuarios.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../html/css/bs/css/bootstrap.css">
    <link href="../html/css/menu.css" rel="stylesheet" type="text/css" />
	<title> Listado usuarios de la empresa</title>

</head>

<body>
<div class="row justify-content-center">
        <div class="col-sm-8 col-md-6" >
            <div class="menu-vertical-productos" >
				<h1> Listado de Usuarios </h1>

					<table class="tabla-productos">

						<tr>
							<th>Tipo usuario</th>
							<th>Usuario</th>
							<th>Contraseña</th>
						</tr>

					<?php foreach ($this->usuarios as $u) { ?>
						<tr>
							<td><?= $u['tipo_usuario'] ?></td>
							<td><?= $u['usuario'] ?></td>
							<td><?= $u['contrasenia'] ?></td>
						</tr>
					<?php } ?>

					</table>
					<div class="links-menu">
						<a href="../controllers/agregarUsuario.php">Agregar Usuario</a>
						<a href="../controllers/eliminarUsuario.php">Eliminar Usuario</a>
						<a href="../controllers/Inicio.php">Volver</a>
					</div>
			</div>
    	</div>
</div>
    <script> src="../html/css/bs/css/bootstrap.js"</script>
</body>

</html>