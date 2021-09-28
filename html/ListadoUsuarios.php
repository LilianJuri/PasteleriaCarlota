<!-- html/ListadoUsuarios.php -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
	<title> Listado usuarios de la empresa</title>

	<style type="text/css">
		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 50%;
		}

		td,
		th {
			border: 1px solid #dddddd;
			text-align: left;
			padding: 8px;
		}

		tr:nth-child(even) {
			background-color: #dddddd;
		}
	</style>
</head>

<body>

	<h1> Listado de Usuarios </h1>

	<table>

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
	<br /><br />
	<a href="../controllers/agregarUsuario.php">Agregar Usuario</a>
	<br /><br />
	<a href="../controllers/eliminarUsuario.php">Eliminar Usuario</a>
	<br /><br />
	<a href="../controllers/Inicio.php">Volver</a>
	
	<script> src="js/bootstrap.js"</script>
</body>

</html>