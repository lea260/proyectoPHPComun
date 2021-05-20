<?php
require_once 'entidades/articulo.php';

class Api260articulos_Controller extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "";
        $this->view->mensaje2 = "";
        $this->view->mensaje3 = "";
    }

    public function render()
    {

        $this->view->render('apilea/articulos/index');
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

        $this->view->render('api260/articulos/listar');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function crear()
    {
        //obtengo los datos de la peticion http, post body
        $json = file_get_contents('php://input');
        //convierto en un array asociativo de php
        $obj = json_decode($json);

        $listaArticulos = [];
        foreach ($obj as $key => $value) {
            $indice = $key;
            $valor = $value;
            $articulo = new Articulo();
            $articulo->id = $valor->id;
            $articulo->nombre = $valor->nombre;
            $listaArticulos[] = $articulo;
            //array_push($listaArticulos, $articulo);
            //$items[] = $item;
        }
        $modeloCargado = $this->model;
        //$articulo->id = $obj->id;
        //$articulo->nombre = $obj->nombre;
        //$articulos = $this->model->get();
        //$this->view->articulos = json_encode($articulos);
        //$listaObjetos = json_encode($listaArticulos);

        $respuesta = [
            "datos" => $listaArticulos,
            "totalResultados" => count($listaArticulos),
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('api260/articulos/crear');
        //var_dump($this);
        //var_dump($this->view);
    }

    public function crear02()
    {
        //obtengo los datos de la peticion http, post body
        $json = file_get_contents('php://input');
        //convierto en un array asociativo de php
        $obj = json_decode($json);

        $articulo = new Articulo();
        $articulo->$codigo = $obj->codigo;
        $articulo->$descripcion = $obj->descripcion;
        $articulo->$precio = $obj->precio;
        $articulo->$fecha = $obj->fecha;
        //array_push($listaArticulos, $articulo);
        //$items[] = $item;

        $modeloCargado = $this->model->crear($articulo);
        //$articulo->id = $obj->id;
        //$articulo->nombre = $obj->nombre;
        //$articulos = $this->model->get();
        //$this->view->articulos = json_encode($articulos);
        //$listaObjetos = json_encode($listaArticulos);

        $respuesta = [
            "datos" => $listaArticulos,
            "totalResultados" => count($listaArticulos),
        ];
        $this->view->respuesta = json_encode($respuesta);

        $this->view->render('api260/articulos/crear');
        //var_dump($this);
        //var_dump($this->view);
    }

}
