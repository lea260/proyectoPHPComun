
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

    public function crear($articulo)
    {

        try {
            $query = $this->db->connect()->prepare('insert into productos (codigo, descripcion,precio, fecha) values (:codigo, :descripcion, :precio, :fecha)');
            $query->bindParam(':codigo', $articulo->codigo);
            $query->bindParam(':descripcion', $articulo->descripcion);
            $query->bindParam(':precio', $articulo->precio);
            $query->bindParam(':fecha', $articulo->fecha);
            //:descripcion, :precio, :fecha
            $lastInsertId = 0;
            if ($query->execute()) {
                $lastInsertId = $query->lastInsertId();
            } else {
                //Pueden haber errores, como clave duplicada
                $lastInsertId = 0;
                echo $consulta->errorInfo()[2];
            }
            $consulta->close();
            return $lastInsertId;
        } catch (PDOException $e) {
            return false;
        }
    }
}
