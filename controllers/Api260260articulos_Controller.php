<?php
require_once 'entidades/articulo.php';

class Api260260articulos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();

    }

    //localahost/prophp3bj/proyectoPHPComun/Api260260articulos
    public function render()
    {

        $listaArticulos = $this->model->listar();
        $respuesta = [
            "datos" => $listaArticulos,
            "totalResultados" => count($listaArticulos),
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('api260260/articulos/listar');
        //var_dump($this);
        //var_dump($this->view);
        //$this->view->render('apilea/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function listar()
    {

        $listaArticulos = $this->model->listar();
        $respuesta = [
            "datos" => $listaArticulos,
            "totalResultados" => count($listaArticulos),
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('api260260/articulos/listar');
        //var_dump($this);
        //var_dump($this->view);
        //$this->view->render('apilea/articulos/index');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function crear()
    {
        //obtengo los datos de la peticion http, post body
        $json = file_get_contents('php://input');
        //convierto en un array asociativo de php
        $obj = json_decode($json);

        $articulo = new Articulo();
        $articulo->codigo = $obj->codigo;
        $articulo->descripcion = $obj->descripcion;
        $articulo->precio = $obj->precio;
        $articulo->fecha = $obj->fecha;
        //array_push($listaArticulos, $articulo);
        //$items[] = $item;

        $lastInsertId = $this->model->crear($articulo);
        //$articulo->id = $obj->id;
        //$articulo->nombre = $obj->nombre;
        //$articulos = $this->model->get();
        //$this->view->articulos = json_encode($articulos);
        //$listaObjetos = json_encode($listaArticulos);

        $respuesta = [
            "ArituloId" => $lastInsertId,
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('api260/articulos/crear02');
        //var_dump($this);
        //var_dump($this->view);
    }

}
