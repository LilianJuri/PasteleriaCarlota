<?php

//models/Productos.php

class Productos extends Model
{ // $nombrep = mysqli_escape_string($this->db, $nombrep);

	public function getTodos()
	{

		$this->db->query("SELECT p.producto_id, p.nombre_producto,p.cantidad,p.precio, c.nombre_categoria
						  FROM productos p
						  LEFT JOIN categoria_producto c ON p.categoria_id = c.categoria_id");
		return $this->db->fetchAll();
	}

	public function crearProducto($categoriaid, $nombrep, $cantidad, $precio)
	{
		if (!ctype_digit($categoriaid)) throw new ProductoException("El id no es un numero entero");
		
		if ($categoriaid < 1) throw new ProductoException("el id tiene que ser mayor a 1");

		if (strlen($nombrep) < 1) throw new ProductoException("Nombre producto menor a 1");
	
		$nombrep = substr($nombrep, 0, 30);
		$nombrep = $this->db->escape($nombrep);

		if (!ctype_digit($cantidad)) throw new ProductoException("la cantidad no es un numero");
	
		if ($cantidad <= 0 || $cantidad >= 10000) throw new ProductoException("La cantidad esta fuera de rango 0< 10000");

		if (!is_numeric($precio)) throw new ProductoException("el precio no es un numero valido");

		if ($cantidad <= 0 || $cantidad >= 10000) throw new ProductoException("El precio esta fuera de rango 0< 20000");

		$this->db->query("INSERT INTO productos
		                    (categoria_id, nombre_producto, cantidad, precio) VALUES
							($categoriaid, '$nombrep', $cantidad, $precio) ");
	}

	public function editarProducto($productoid,$nombrep,$categoriaid, $cantidad, $precio)
	{

		if (!ctype_digit($categoriaid)) throw new ProductoException("El id no es un numero entero");

		if (strlen($nombrep) < 1) throw new ProductoException("Nombre producto menor a 1");

		$nombrep = substr($nombrep, 0, 30); 
        $nombrep =$this->db->escape($nombrep);

		if (!ctype_digit($cantidad)) throw new ProductoException("la cantidad no es un numero");

		if ($cantidad <= 0 || $cantidad >= 10000) throw new ProductoException("La cantidad esta fuera de rango 0< 10000");

		if (!is_numeric($precio)) throw new ProductoException("El precio no es un numero valido");

		if ($cantidad <= 0 || $cantidad >= 10000) throw new ProductoException("El precio esta fuera de rango 0< 20000");

		$this->db->query("UPDATE productos
                          SET categoria_id = '$categoriaid', nombre_producto = '$nombrep', cantidad = '$cantidad', precio = '$precio'
                          WHERE producto_id = ($productoid) ");
	}

	public function existeProducto($nombreproducto)
	{

		if (strlen($nombreproducto) < 1) throw new ProductoException("error2 nombre producto menor a 1");
		$nombreproducto = substr($nombreproducto, 0, 30);
		$nombreproducto = $this->db->escape($nombreproducto);
		$nombreproducto = $this->db->escapeWildcards($nombreproducto);

		$this->db->query("SELECT * FROM productos
						  WHERE nombre_producto 
						  LIKE '$nombreproducto' ");
		if ($this->db->numRows() == 1) return true;
		return false;
	}

	public function eliminarProductoActual($idproductoe)
	{
		if (!ctype_digit($idproductoe)) throw new ProductoException("El id no es un numero entero");
		if ($idproductoe < 1) throw new ProductoException("el id tiene que ser mayor a 1");

		$this->db->query("DELETE FROM  productos
                          WHERE producto_id = ($idproductoe) ");
	}

	public function precioProducto($idproducto)
	{
		if (!ctype_digit($idproducto)) throw new ProductoException("El id no es un numero entero");
		if ($idproducto < 1) throw new ProductoException("el id tiene que ser mayor a 1");

		$this->db->query("SELECT precio FROM productos WHERE producto_id = ($idproducto)");
		$preciop = $this->db->fetch();
		$preciop = $preciop['precio'];
		return $preciop;
	}

	public function stockProducto($idproducto)
	{
		if (!ctype_digit($idproducto)) throw new ProductoException("El id no es un numero entero");
		if ($idproducto < 1) throw new ProductoException("el id tiene que ser mayor a 1");

		$this->db->query("SELECT cantidad FROM productos WHERE producto_id = ($idproducto)");
		$cantidadp = $this->db->fetch();
		$cantidadp = $cantidadp['cantidad'];
		return $cantidadp;
	}
}

class ProductoException extends Exception{}
