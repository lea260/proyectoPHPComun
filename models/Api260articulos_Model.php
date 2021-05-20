<?php

require_once 'entidades/alumno.php';
require_once 'entidades/articulo.php';

class Api260articulos_Model extends Model
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
    }

    public function crear($articulo)
    {

        try {
            $query = $this->db->connect()->prepare('insert into productos (codigo, descripcion,precio, fecha) values (:codigo, :descripcion, :precio, :fecha)');
            $query->bindParam(':codigo', $articulo->codigo);
            $query->bindParam(':descripcion', $articulo->descripcion);
            $query->bindParam(':precio', $articulo->precio);
            $query->bindParam(':fecha', $articulo->fecha);
            //:descripcion, :precio, :fecha
            $query->execute();
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
    //insert into productos (codigo, descripcion,precio,fecha) values('cod01api','desc12',30.00,'2013-12-29')

    public function getById($id)
    {
        $item = new Alumno();
        try {
            $query = $this->db->connect()->prepare('SELECT * FROM alumnos WHERE matricula = :id');

            $query->execute(['id' => $id]);

            while ($row = $query->fetch()) {

                $item->matricula = $row['matricula'];
                $item->nombre = $row['nombre'];
                $item->apellido = $row['apellido'];
            }
            return $item;
        } catch (PDOException $e) {
            return null;
        }
    }

    public function update($item)
    {
        $query = $this->db->connect()->prepare('UPDATE alumnos SET nombre = :nombre, apellido = :apellido WHERE matricula = :matricula');
        try {
            $query->execute([
                'matricula' => $item['matricula'],
                'nombre' => $item['nombre'],
                'apellido' => $item['apellido'],
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }

    public function delete($id)
    {
        $query = $this->db->connect()->prepare('DELETE FROM alumnos WHERE matricula = :matricula');
        try {
            $query->execute([
                'matricula' => $id,
            ]);
            return true;
        } catch (PDOException $e) {
            return false;
        }
    }
}
