<?php

//models/Usuarios.php

class Usuarios extends Model
{


	public function getTodos()
	{
		$this->db->query("SELECT * FROM usuarios");
		return $this->db->fetchAll();
	}

	public function validarInicioSesion($usuario, $password)
	{
		$usuario = $this->db->escapeWildcards($usuario);
		if (strlen($usuario) < 3 || strlen($usuario) > 10) die("Usuario fuera de rango");
		$password = $this->db->escapeWildcards($password);
		if (strlen($password) < 3 || strlen($password) > 10) die("Usuario fuera de rango");

		$this->db->query("SELECT *
                          FROM usuarios
                          WHERE usuario = '$usuario' AND
                            contrasenia = '$password' ");
		if ($this->db->numRows() != 1) {
			return false;
		} else {
			return true;
		}
	}

	public function validarAccesoUsuario($usuario)
	{
		//se valido en validarInicioSesion

		$this->db->query("SELECT *
                          FROM usuarios
                          WHERE usuario = '$usuario' AND
                                tipo_usuario = 'admin' ");
		if ($this->db->numRows() != 1) {
			return false;
		} else {
			return true;
		}
	}

	public function crearUsuario($tipousuario, $usuarion, $contrasenian)
	{
		$tipousuario = mysqli_escape_string($this->db, $tipousuario);

		$usuarion = $this->db->escapeWildcards($usuarion);
		if (strlen($usuarion) < 3 || strlen($usuarion) > 10) die("Usuario fuera de rango");
		$usuarion = mysqli_escape_string($this->db, $usuarion);

		$contrasenian = $this->db->escapeWildcards($contrasenian);
		if (strlen($contrasenian) < 3 || strlen($contrasenian) > 10) die("Usuario fuera de rango");
		$contrasenian = mysqli_escape_string($this->db, $contrasenian);

		$this->db->query("INSERT INTO usuarios
		                    (tipo_usuario, usuario, contrasenia) VALUES
							('$tipousuario', '$usuarion', '$contrasenian') ");
	}

	public function existeUsuario($nombreusuario)
	{
		$nombreusuario = $this->db->escapeWildcards($nombreusuario);
		if (strlen($nombreusuario) < 3 || strlen($nombreusuario) > 10) die("Usuario fuera de rango");
		$nombreusuario = mysqli_escape_string($this->db, $nombreusuario);

		$this->db->query("SELECT * FROM usuarios
						  WHERE usuario 
						  LIKE '$nombreusuario' ");
		if ($this->db->numRows() == 1) return true;
		return false;
	}

	public function eliminarUsuarioActual($idusuarioe)
	{
		if (!ctype_digit($idusuarioe)) die("El id no es un numero entero");
		if ($idusuarioe < 1) die("el id tiene que ser mayor a 1");

		$this->db->query("DELETE FROM  usuarios
                          WHERE usuario_id = ($idusuarioe) ");
	}
}
