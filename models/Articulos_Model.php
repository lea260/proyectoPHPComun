<?php

require_once 'entidades/alumno.php';
require_once 'entidades/articulo.php';

class Articulos_Model extends Model
{

    public function __construct()
    {
        parent::__construct();
    }

    public function get()
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
    }

    public function verArticulo($id)
    {
        $articulo = null;
        try {
            $query = $this->db->connect()->prepare('SELECT id_productos, codigo,descripcion,precio,fecha FROM productos WHERE id_productos=:id');
            $query->bindValue(':id', $id);
            //$query->execute(['nombre' => $nombre]);
            $query->execute();
            while ($row = $query->fetch()) {
                $articulo = new Articulo();
                $articulo->id = $row['id_productos'];
                $articulo->codigo = $row['codigo'];
                $articulo->descripcion = $row['descripcion'];
                $articulo->precio = $row['precio'];
                $articulo->fecha = $row['fecha'];
            }
        } catch (PDOException $e) {
            var_dump($e);
        }
        return $articulo;
    } //end ver
}
