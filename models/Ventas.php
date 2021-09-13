<?php

//models/Ventas.php

class Ventas extends Model
{

    public function crearVenta($usuarion, $d, $m, $a)
    {
        $usuarion = $this->db->escapeWildcards($usuarion);
        if (strlen($usuarion) < 3 || strlen($usuarion) > 10) die("Usuario fuera de rango");

        if (!ctype_digit($d)) die("el dia no es un numero");
        if ($d < 1) die("el dia es menor a 1");
        if ($d > 31) die("el dia es mayor a 1");


        if (!ctype_digit($m)) die("el mes no es un numero");
        if ($m < 1) die("el mes es menor a 1");
        if ($m > 12) die("el mes es mayor a 12");


        if (!ctype_digit($a)) die("el anio no es un numero");
        if ($a > date("Y")) die("el anio es mayor al existente");
        if ($a < (date("Y") - 1)) die("rango no permitido de anio");

        if (!checkdate($m, $d, $a)) die("fecha no existente");

        $usuarioid = $this->db->query("SELECT usuario_id FROM usuarios WHERE usuario ='$usuarion'");
        $usuarioid = $this->db->fetch();
        $usuarioid = $usuarioid['usuario_id'];

        $this->db->query("INSERT INTO venta
		                    (usuario_id, fecha ) VALUES
							($usuarioid, '$a-$m-$d') ");
    }

    public function ultimoIDventa()
    {

        $this->db->query("SELECT MAX(venta_id) as idultimo FROM venta ORDER BY venta_id");
        $ultimoID = $this->db->fetch();
        $ultimoID = $ultimoID['idultimo'];
        return $ultimoID;
    }

    public function getTodosDetalle()
    {
        $this->db->query("SELECT p.nombre_producto, d.precio, d.cantidad,d.venta_id
		                   FROM detalle_venta d 
						   LEFT JOIN productos p ON p.producto_id = d.producto_id");
        return $this->db->fetchAll();
    }

    public function crearDetalleVenta($productoid, $ventaid, $precio, $cantidad)
    {
        if (!ctype_digit($cantidad)) die("la cantidad no es un numero");
        if ($cantidad <= 0 || $cantidad >= 1000) die("La cantidad esta fuera de rango 0< 1000");

        if (!ctype_digit($productoid)) die("El id no es un numero entero");
        if ($productoid < 1) die("el id tiene que ser mayor a 1");

        if (!ctype_digit($ventaid)) die("El id no es un numero entero");
        if ($ventaid < 1) die("el id tiene que ser mayor a 1");

        if (!is_numeric($precio)) die("el precio no es un numero valido");
        if ($cantidad <= 0 || $cantidad >= 10000) die("El precio esta fuera de rango 0< 20000");

        $this->db->query("INSERT INTO detalle_venta
		                    (producto_id, venta_id, precio, cantidad) VALUES
                            ($productoid, $ventaid, $precio, $cantidad) ");

        //actualiza monto del stock

        $cantidadactual = $this->db->query("SELECT cantidad FROM productos WHERE producto_id = ($productoid)");
        $cantidadactual = $this->db->fetch();
        $cantidadactual = $cantidadactual['cantidad'];
        $cantidadactual = intval($cantidadactual);
        $cantidad = intval($cantidad);
        $nuevacantidad = $cantidadactual - $cantidad;

        $this->db->query("UPDATE productos
                          SET cantidad = '$nuevacantidad'
                          WHERE producto_id = ($productoid) ");
    }

    public function eliminarVentaActual()
    {
        $idventaeliminar = $this->ultimoIDVenta();

        $this->db->query("DELETE FROM detalle_venta 
                          WHERE venta_id = ($idventaeliminar) ");

        $this->db->query("DELETE FROM venta 
                          WHERE venta_id = ($idventaeliminar) ");
    }
}
