<?php

//models/Categorias.php

class Categorias extends Model
{
    public function getTodos()
    {
        $this->db->query("SELECT * FROM categoria_producto");
        return $this->db->fetchAll();
    }
}

