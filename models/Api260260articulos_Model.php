
<?php

require_once 'entidades/alumno.php';
require_once 'entidades/articulo.php';

class Api260260articulos_Model extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function listar()
    {
        //define un arreglo en php
        //$items = array();
        $items = [];
        try {
            $query = $this->db->connect()->query('SELECT id_productos, codigo,descripcion,precio,fecha FROM productos');
            while ($row = $query->fetch()) {
                $item = new Articulo();
                $item->id = $row['id_productos'];
                $item->codigo = $row['codigo'];
                $item->descripcion = $row['descripcion'];
                $item->precio = $row['precio'];
                $item->fecha = $row['fecha'];
                array_push($items, $item);
            }
            return $items;
        } catch (PDOException $e) {
            return [];
        }
    } //end listar
}
